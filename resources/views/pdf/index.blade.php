<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Restaurant Menu</title>
      <style>
         body {
         font-family: Arial, sans-serif;
         /* background-color: #f2f2f2; */
         }
         .menu {
         max-width: 800px;
         margin: 0 auto;
         background-color: white;
         border-radius: 10px;
         padding: 20px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
         .menu h1 {
         text-align: center;
         margin-bottom: 30px;
         }
         .menu-item {
         display: flex;
         flex-direction: row;
         align-items: center;
         margin-bottom: 20px;
         border-bottom: 1px solid #ccc;
         padding-bottom: 10px;
         }
         .menu-item img {
         width: 100px;
         margin-right: 20px;
         border-radius: 5px;
         box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
         }
         .menu-item h2 {
         margin: 0;
         }
         .menu-item p {
         margin: 0;
         font-size: 0.8em;
         color: #777;
         }
         .menu-item span {
         font-size: 1.2em;
         font-weight: bold;
         margin-left: auto;
         }
         .description{
         color: #747474 !important;
         font-weight: 700;
         font-size: 12px;
         }
         .button-action{
         max-width: 600px;
         margin: 0 auto;
         display:flex;
         justify-content: space-between;
         }
         .category{
         color: white;
         text-align: left;
         padding: 5px;
         background-color: #3c3c3c;
         }
         .card-img-top{
         width: 100px;
         height: auto;
         border-radius: 7px;
         }
         .menu-container{
         display:flex;
         align-items:center;
         justify-content:space-between;
         }
         .submenu-container{
         display:flex;
         align-items:center;
         justify-content:start;
         gap: 20px;
         padding-right: 20px;
         }
          

      </style>
   </head>
   <body>
      <div class="menu">
         <h1>{{$resto_name}}</h1>
         @foreach ($categories as $index => $category)
         <h2 class="category">{{ $category->name }}</h2>
         <!-- <div class="menu-item">
            <img src="/images/product/p2.jpg" alt="Food Item 1">
            <div>
                <h2>{{ $category->name }}</h2>
                <p class="description">Description of food item 1</p>
            </div>
            <span>$10.99</span>
            </div> -->
         @foreach ( $category->items as $item)
         
           <!-- <div style="clear:both; position:relative;">
                <div style="position:absolute; left:0pt; width:192pt;">
                    <img class="card-img-top" src="{{ $item->logom }}" alt="...">
                </div>
                <div style="margin-left:200pt;">
                        <h3 class="menu-name">{{ $item->name }}</h3>
                        <p class="description">{{ $item->description }}</p>
                    <span>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span>

                </div>
                 
           </div> -->
         <table>
            <tr>
                <td width="150px">
                <img class="card-img-top" src="{{ $item->logom }}" alt="...">

                </td>
                <td width="400px">
                <h3 class="menu-name">{{ $item->name }}</h3>
                        <p class="description">{{ $item->description }}</p>
                </td>
                <td width="100px">
                    <span>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span>
                </td>
            </tr>
         </table>
           <!-- <div style="width: 100%; display: flex; justify-content:center">
                <div style="width: 20%;">
                    <img class="card-img-top" src="{{ $item->logom }}" alt="...">
                </div>
                <div style="width: 80%; ">
                        <h3 class="menu-name">{{ $item->name }}</h3>
                        <p class="description">{{ $item->description }}</p>
                    <span>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span>

                </div>
                <div style="width: 20%">
                    <span>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span>
                </div>
           </div>
             -->
                  
         
            
            <br/>
         @endforeach
         @endforeach
      </div>
      <div class="button-action">
         <a href="#">Save</a>
         <a href="{{route('pdf.menu.download')}}">Download</a>
      </div>
   </body>
</html>