<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Traits\Modules;
use Akaunting\Module\Facade as Module;
use App\Models\PlanSubscription;
use App\Traits\Fields;

use App\Restorant;

use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductPayment;
use App\User;

class AdminProductController extends Controller
{
    use Fields;
    use Modules;
    
    protected $imagePath = 'uploads/restorants/';
    private function authChecker()
    {
        $this->ownerOnly();
    }

    public function index(Product $products){
        if (auth()->user()->hasRole('admin')) {
            $allRes= $products->orderBy('id', 'desc')->pluck('name','id');
            return view('restorants.product_list', [
                'parameters'=>count($_GET) != 0,
                'hasCloner'=>Module::has('cloner'),
                'allRes'=>$allRes,
                'products' => $products->orderBy('id', 'desc')->paginate(10)]);
        } if (auth()->user()->hasRole('manager')) {
            $allRes= $products->whereIn('id',auth()->user()->getManagerVendors())->orderBy('id', 'desc')->pluck('name','id');
            return view('restorants.product_list', [
                'parameters'=>count($_GET) != 0,
                'hasCloner'=>Module::has('cloner'),
                'allRes'=>$allRes,
                'products' => $products->whereIn('id',auth()->user()->getManagerVendors())->orderBy('id', 'desc')->paginate(10)]);
        } else {
            return redirect()->route('orders.index')->withStatus(__('No Access'));
        }
    }

    public function create(){
        return view('restorants.product_create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'main_price' => ['required', 'string', 'max:20'],
            'discount_price' => ['required', 'string', 'max:20'],
            'rating' => ['required', 'string', 'max:20'],
            'status' => ['required', 'string', 'max:5'],
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = new Product;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/product'), $imageName);
        $product->image = "/images/product/" . $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->current_price = $request->main_price;
        $product->discounted_price = $request->discount_price;
        $product->rating = $request->rating;
        $product->status = $request->status;
        $product->save();
    
        if ($request->hasFile('gallery_image')) {
            $galleryImages = $request->file('gallery_image');
            foreach ($galleryImages as $index => $file) {
                $galleryImageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/product'), $galleryImageName);
    
                $productGallery = new ProductGallery();
                $productGallery->product_id = $product->id;
                $productGallery->image = "/images/product/" . $galleryImageName;
                $productGallery->save();
            }
        }
    
        if ($product->save()) {
            return redirect()->route('admin.product.index')->withStatus(__('Product Saved.'));
        } else {
            return redirect()->route('admin.product.index')->withError(__('Something Went Wrong.'));
        }
    }
    

    public function status($id, $status, Request $request)
    {
        Product::where('id', $id)->update([
            'status'=> $status
        ]);
        return redirect()->route('admin.product.index')->withStatus(__('Product Successfully Updated.'));
    }
    public function remove($id){
       Product::where('id', $id)->delete();
       return redirect()->route('admin.product.index')->withStatus(__('Product Deleted.'));
    }

    public function purchaseList(){
       $purchases =  ProductPayment::with('product', 'user', 'restaurant')->orderBy('id', 'desc')->paginate(10);        
        if (auth()->user()->hasRole('admin')) {
            return view('restorants.product_purchase_list', compact('purchases'));
        }else{
            $purchases =  ProductPayment::where('user_id', auth()->user()->id)->with('product', 'user', 'restaurant')->paginate(10);        
            return view('restorants.product_purchase_list', compact('purchases'));
        }
    }

    public function subscription(){
        $plan_subscriptions = PlanSubscription::with('user', 'restaurant', 'plan')
        ->orderBy('created_at', 'desc')
        ->groupBy('user_id')
        ->paginate(10);    
        return view('restorants.subscription_list', compact('plan_subscriptions'));
    }

}
