<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

use App\Categories;
use App\Extras;
use App\Imports\ItemsImport;
use App\Items;
use App\Plans;
use App\Restorant;
use Image;
use Maatwebsite\Excel\Facades\Excel;
use App\Services\ConfChanger;
use Akaunting\Module\Facade as Module;
use App\Models\Allergens;

class PdfController extends Controller
{
  public function layoutindex(){
    $restaurant_id = auth()->user()->restorant->id;
    $resto_name = auth()->user()->restorant->name;
     
    if (auth()->user()->hasRole('owner')) {
            
      $canAdd = auth()->user()->restorant->getPlanAttribute()['canAddNewItems'];
      
      //Change language
      ConfChanger::switchLanguage(auth()->user()->restorant);

      if (isset($_GET['remove_lang']) && auth()->user()->restorant->localmenus()->count() > 1) {
          $localMenuToDelete=auth()->user()->restorant->localmenus()->where('language', $_GET['remove_lang'])->first();
          $isMenuToDeleteIsDefault=$localMenuToDelete->default.""=="1";
          $localMenuToDelete->delete();
          
          $nextLanguageModel = auth()->user()->restorant->localmenus()->first();
          $nextLanguage = $nextLanguageModel->language;
          app()->setLocale($nextLanguage);
          session(['applocale_change' => $nextLanguage]);

          if($isMenuToDeleteIsDefault){
              $nextLanguageModel->default=1;
              $nextLanguageModel->update();
          }
      }

      if(isset($_GET['make_default_lang'])){
          $newDefault=auth()->user()->restorant->localmenus()->where('language', $_GET['make_default_lang'])->first();
          $oldDefault=auth()->user()->restorant->localmenus()->where('default', "1")->first();
          
          if($oldDefault&&$oldDefault->language!=$_GET['make_default_lang']){
              $oldDefault->default=0;
              $oldDefault->update();
          }
          $newDefault->default=1;
          $newDefault->update();
          
      }

      $currentEnvLanguage = isset(config('config.env')[2]['fields'][0]['data'][config('app.locale')]) ? config('config.env')[2]['fields'][0]['data'][config('app.locale')] : 'UNKNOWN';

      //Change currency
      ConfChanger::switchCurrency(auth()->user()->restorant);
      $defaultLng=auth()->user()->restorant->localmenus->where('default','1')->first();

      

      //Since 2.1.7 - there is sorting. 
     $categories=auth()->user()->restorant->categories;
     
      //If first item order starts with 0
      if($categories->first()&&$categories->first()->order_index==0){
          Categories::setNewOrder($categories->pluck('id')->toArray());
          //Re-get categories
          $categories=auth()->user()->restorant->categories;
      }

      return view('pdf.index', [
          'hasMenuPDf'=>Module::has('menupdf'),
          'canAdd'=>$canAdd,
          'categories' => $categories,
          'restorant_id' => auth()->user()->restorant->id,
          'resto_name' => $resto_name,
          'restaurant_id' => $restaurant_id,
          'currentLanguage'=> $currentEnvLanguage,
          'availableLanguages'=>auth()->user()->restorant->localmenus,
          'defaultLanguage'=>$defaultLng?$defaultLng->language:""
          ]);
  } else {
      return redirect()->route('orders.index')->withStatus(__('No Access'));
  }
  }
  public function index($var){
    
    if($var == 1){
        $resto_name = auth()->user()->restorant->name;
      
        if (auth()->user()->hasRole('owner')) {
                
          $canAdd = auth()->user()->restorant->getPlanAttribute()['canAddNewItems'];
          
          //Change language
          ConfChanger::switchLanguage(auth()->user()->restorant);
    
          if (isset($_GET['remove_lang']) && auth()->user()->restorant->localmenus()->count() > 1) {
              $localMenuToDelete=auth()->user()->restorant->localmenus()->where('language', $_GET['remove_lang'])->first();
              $isMenuToDeleteIsDefault=$localMenuToDelete->default.""=="1";
              $localMenuToDelete->delete();
              
              $nextLanguageModel = auth()->user()->restorant->localmenus()->first();
              $nextLanguage = $nextLanguageModel->language;
              app()->setLocale($nextLanguage);
              session(['applocale_change' => $nextLanguage]);
    
              if($isMenuToDeleteIsDefault){
                  $nextLanguageModel->default=1;
                  $nextLanguageModel->update();
              }
          }
    
          if(isset($_GET['make_default_lang'])){
              $newDefault=auth()->user()->restorant->localmenus()->where('language', $_GET['make_default_lang'])->first();
              $oldDefault=auth()->user()->restorant->localmenus()->where('default', "1")->first();
              
              if($oldDefault&&$oldDefault->language!=$_GET['make_default_lang']){
                  $oldDefault->default=0;
                  $oldDefault->update();
              }
              $newDefault->default=1;
              $newDefault->update();
              
          }
    
          $currentEnvLanguage = isset(config('config.env')[2]['fields'][0]['data'][config('app.locale')]) ? config('config.env')[2]['fields'][0]['data'][config('app.locale')] : 'UNKNOWN';
    
          //Change currency
          ConfChanger::switchCurrency(auth()->user()->restorant);
          $defaultLng=auth()->user()->restorant->localmenus->where('default','1')->first();
    
          
    
          //Since 2.1.7 - there is sorting. 
        $categories=auth()->user()->restorant->categories;
        
          //If first item order starts with 0
          if($categories->first()&&$categories->first()->order_index==0){
              Categories::setNewOrder($categories->pluck('id')->toArray());
              //Re-get categories
              $categories=auth()->user()->restorant->categories;
          }
    
          return view('pdf.template.menu_one', [
              'hasMenuPDf'=>Module::has('menupdf'),
              'canAdd'=>$canAdd,
              'categories' => $categories,
              'restorant_id' => auth()->user()->restorant->id,
              'resto_name' => $resto_name,
              'currentLanguage'=> $currentEnvLanguage,
              'availableLanguages'=>auth()->user()->restorant->localmenus,
              'defaultLanguage'=>$defaultLng?$defaultLng->language:""
              ]);
      } else {
          return redirect()->route('orders.index')->withStatus(__('No Access'));
      }
    }else{
        $resto_name = auth()->user()->restorant->name;
      
        if (auth()->user()->hasRole('owner')) {
                
          $canAdd = auth()->user()->restorant->getPlanAttribute()['canAddNewItems'];
          
          //Change language
          ConfChanger::switchLanguage(auth()->user()->restorant);
    
          if (isset($_GET['remove_lang']) && auth()->user()->restorant->localmenus()->count() > 1) {
              $localMenuToDelete=auth()->user()->restorant->localmenus()->where('language', $_GET['remove_lang'])->first();
              $isMenuToDeleteIsDefault=$localMenuToDelete->default.""=="1";
              $localMenuToDelete->delete();
              
              $nextLanguageModel = auth()->user()->restorant->localmenus()->first();
              $nextLanguage = $nextLanguageModel->language;
              app()->setLocale($nextLanguage);
              session(['applocale_change' => $nextLanguage]);
    
              if($isMenuToDeleteIsDefault){
                  $nextLanguageModel->default=1;
                  $nextLanguageModel->update();
              }
          }
    
          if(isset($_GET['make_default_lang'])){
              $newDefault=auth()->user()->restorant->localmenus()->where('language', $_GET['make_default_lang'])->first();
              $oldDefault=auth()->user()->restorant->localmenus()->where('default', "1")->first();
              
              if($oldDefault&&$oldDefault->language!=$_GET['make_default_lang']){
                  $oldDefault->default=0;
                  $oldDefault->update();
              }
              $newDefault->default=1;
              $newDefault->update();
              
          }
    
          $currentEnvLanguage = isset(config('config.env')[2]['fields'][0]['data'][config('app.locale')]) ? config('config.env')[2]['fields'][0]['data'][config('app.locale')] : 'UNKNOWN';
    
          //Change currency
          ConfChanger::switchCurrency(auth()->user()->restorant);
          $defaultLng=auth()->user()->restorant->localmenus->where('default','1')->first();
    
          
    
          //Since 2.1.7 - there is sorting. 
        $categories=auth()->user()->restorant->categories;
        
          //If first item order starts with 0
          if($categories->first()&&$categories->first()->order_index==0){
              Categories::setNewOrder($categories->pluck('id')->toArray());
              //Re-get categories
              $categories=auth()->user()->restorant->categories;
          }
    
          return view('pdf.template.menu_two', [
              'hasMenuPDf'=>Module::has('menupdf'),
              'canAdd'=>$canAdd,
              'categories' => $categories,
              'restorant_id' => auth()->user()->restorant->id,
              'resto_name' => $resto_name,
              'currentLanguage'=> $currentEnvLanguage,
              'availableLanguages'=>auth()->user()->restorant->localmenus,
              'defaultLanguage'=>$defaultLng?$defaultLng->language:""
              ]);
      } else {
          return redirect()->route('orders.index')->withStatus(__('No Access'));
      }
    }
   
  }
  public function pdfDownload($var)
  {
      $resto_name = auth()->user()->restorant->name;
      $categories=auth()->user()->restorant->categories;
      $data = [
        'categories'    => $categories=auth()->user()->restorant->categories,
        'resto_name'    => $resto_name,
      ];
      
    //   ini_set('max_execution_time', 180); //3 minutes
      // Get the HTML content from the view
      if($var == 1){
        $html = view('pdf.template.menu_one', $data)->render();

      }else{
        $html = view('pdf.template.menu_two', $data)->render();

      }

      libxml_use_internal_errors(true);

      // Find all img tags in the HTML
      $doc = new \DOMDocument();
      $doc->loadHTML($html);
      $images = $doc->getElementsByTagName('img');
  
      // Loop through each image and convert it to base64
      foreach ($images as $image) {
          $path = public_path() . $image->getAttribute('src');
          $type = pathinfo($path, PATHINFO_EXTENSION);
          $data = file_get_contents($path);
          $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
          $image->setAttribute('src', $base64);
      }
      
  
      // Save the modified HTML
      $html = $doc->saveHTML();
  
      // Create a new Dompdf instance
      $dompdf = new Dompdf();
  
      // Load the modified HTML into Dompdf
     $dompdf->loadHtml($html);
  

     libxml_use_internal_errors(false);

      // Set the paper size and orientation
      $dompdf->setPaper('A4', 'portrait');
      //   $paper_orientation = 'landscape';
      //   $customPaper = array(0,0,950,950);
      //   $dompdf->set_paper($customPaper,$paper_orientation);
      // Render the HTML as PDF
      $dompdf->render();
       
  
      // Output the generated PDF (inline or as attachment)
      return $dompdf->stream('document.pdf');
  }

  public function pdfDownloadUser($var)
  {
      $restorant = Restorant::whereRaw('REPLACE(subdomain, "-", "") = ?', [str_replace("-","",$var)])->first();
      $categories = $restorant->categories;
      $resto_name = $restorant->name;
      $data = [
        'categories'    => $categories,
        'resto_name'    => $resto_name,
      ];
      
    //   ini_set('max_execution_time', 180); //3 minutes
      // Get the HTML content from the view
      $html = view('pdf.template.menu_one', $data)->render();
   
      libxml_use_internal_errors(true);

      // Find all img tags in the HTML
      $doc = new \DOMDocument();
      $doc->loadHTML($html);
      $images = $doc->getElementsByTagName('img');
  
      // Loop through each image and convert it to base64
      foreach ($images as $image) {
          $path = public_path() . $image->getAttribute('src');
          $type = pathinfo($path, PATHINFO_EXTENSION);
          $data = file_get_contents($path);
          $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
          $image->setAttribute('src', $base64);
      }
      
  
      // Save the modified HTML
      $html = $doc->saveHTML();
  
      // Create a new Dompdf instance
      $dompdf = new Dompdf();
  
      // Load the modified HTML into Dompdf
     $dompdf->loadHtml($html);
  

     libxml_use_internal_errors(false);

      // Set the paper size and orientation
      $dompdf->setPaper('A4', 'portrait');
      //   $paper_orientation = 'landscape';
      //   $customPaper = array(0,0,950,950);
      //   $dompdf->set_paper($customPaper,$paper_orientation);
      // Render the HTML as PDF
      $dompdf->render();
       
  
      // Output the generated PDF (inline or as attachment)
      return $dompdf->stream('document.pdf');
  }
  
}
