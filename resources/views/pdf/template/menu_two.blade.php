<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            max-width: 650px;
            margin: 0 auto;
            padding-top: 20px;  
            
        }
        .items
        {
            padding: 20px;
            text-align: center; 
            
        }
        .items h1
        {
            font-size: 54px; 
            color: #7c221f; 
            margin: 20px 20px
        }
        .items h3
        {
            font-size: 24px; 
            color: #2b2b2b;
            margin: 20px 20px
        }
        .items .hr-tag
        {
            width: 20px; 
            height: 20px; 
            transform: rotate(45deg); 
            background-color: #7c221f; 
            margin: 0 auto; 
        }
        .items hr
        {
            background-color: #7c221f; 
            height: 2px; 
            margin: 20px 20px;
        }
        .items h2
        {
            color: #7c221f; 
            font-size: 28px; 
        }
        .items h4{
            font-size: 24px; 
            font-weight: bold; 
            color: #555;  
        }
        .table-content 
        {
            display: table;
            width: 100%;
        }
        .table-content td p
        {
            font-size: 16px; 
            font-weight: normal; 
            color: #7c221f;
        }
        .table-content .item-name .item-price
        {
            display: table-cell;
            padding: 5px;
        }
        .item-name {
            text-align: left;
            width: 80%;
        }
        .item-price {
            text-align: right;
            margin-right: 20px;
            width: 20%;
            }
        .table-content .plus-icon
        {
            background: #13905e;
            padding: 2px;
            text-align: center;
            border: 2px solid #13905e;
            border-radius: 5px;
            color: white;
        }
        .card-img-top{
         width: 70px;
         height: auto;
         border-radius: 7px;
         margin-right: 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
        <td class="menu-content">
                <div class="items">
                    <h1>{{$resto_name}}</h1>
                    <!-- <h3 >FRESHLY MADE</h3> -->
                    <div class="hr-tag"></div>
                    <hr>
                    <h2>Menus For You</h2>
                    <hr>
                    @foreach ($categories as $index => $category)

                        <div style="page-break-inside: avoid;">
                                <h4 style="width: 600px;" >{{ $category->name }}</h4>
                                <!-- <span style="page-break-after:avoid;"></span> -->
                                <div>
                                    <table class="table-content">
                                    @foreach ( $category->items as $item)
                                        <tr>
                                            <td width="50px">
                                                <img class="card-img-top" src="{{ $item->logom }}" alt="...">
                                            </td>
                                            <td width="400px">
                                                <p class="item-name">{{ $item->name }}</p>
                                                <!-- <p class="description">{{ $item->description }}</p> -->

                                            </td>
                                            <td width="100px">
                                                <p class="item-price">@money($item->price, config('settings.cashier_currency'),config('settings.do_convertion'))</p>
                                            </td>
                                            <td width="30px">
                                                <a href="https://myqrshop.com/restaurant/{{$resto_subdomain}}/{{ $item->id }}" style="text-decoration: none;">
                                                    <div class="plus-icon">+</div>
                                                    </a>                   
                                            </td>
                                        </tr>
                                        @endforeach

                                    </table>
                                </div>
                        </div>
                            <span style="page-break-before: always;"></span>
                    @endforeach
                </div>
            </td>
            
        </tr>
        
    </table>
 
</body>
</html>