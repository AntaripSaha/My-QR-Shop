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
         text-align: center;
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
         .plus-icon
        {
            background: #13905e;
            padding: 2px;
            text-align: center;
            border: 2px solid #13905e;
            border-radius: 5px;
            color: white;
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
         <table>
            <tr>
               <td width="120px">
                  <img class="card-img-top" src="{{ $item->logom }}" alt="...">
               </td>
               <td width="400px">
                  <h3 class="menu-name">{{ $item->name }}</h3>
                  <p class="description">{{ $item->description }}</p>
               </td>
               <td width="100px">
                  <span>@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</span>
               </td>
               <td width="30px">
                  <a href="https://myqrshop.com/restaurant/{{$resto_subdomain}}/{{ $item->id }}" style="text-decoration: none;">
                     <div class="plus-icon">+</div>
                  </a>
               </td>
            </tr>
         </table>
         @endforeach
         <span style="page-break-after:always;"></span>

         @endforeach
      </div>
   </body>
</html>