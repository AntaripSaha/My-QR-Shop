<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Traits\Modules;
use Akaunting\Module\Facade as Module;
use App\Traits\Fields;

use App\Restorant;

use App\Models\Product;


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

    public function store(Request $request){
        // return $request;
        //Validate
        $request->validate([
            'image' =>  ['required','image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'main_price' => ['required', 'string', 'max:20'],
            'discount_price' => ['required', 'string', 'max:20'],
            'rating' => ['required', 'string', 'max:20'],
            'status' => ['required', 'string', 'max:5'],
        ]);
        $product = new Product;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/product'), $imageName);
        $product->image = "/images/product/".$imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->current_price = $request->main_price;
        $product->discounted_price = $request->discount_price;
        $product->rating = $request->rating;
        $product->status = $request->status;
        if($product->save()){
            return redirect()->route('admin.product.index')->withStatus(__('Product Saved.')) ;
        }else{
            return redirect()->route('admin.product.index')->withError(__('Something Went Wrong.')) ;
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

}
