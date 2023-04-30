<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .menu {
            max-width: 600px;
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
        
        .menu{
            /* background-color: blue; */
            /* background-image: url('{{ asset('images/product/p3.jpg') }}'); */
            background-size: cover;
            background-position: center center; 
        }
        
        .description{
            color: black !important;
            font-weight: 700;
        }

        .button-action{
            max-width: 600px;
            margin: 0 auto;
            display:flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="menu">
        <h1>Restaurant Menu</h1>
        <div class="menu-item">
            <img src="/images/product/p2.jpg" alt="Food Item 1">
            <div>
                <h2>Food Item 1</h2>
                <p class="description">Description of food item 1</p>
            </div>
            <span>$10.99</span>
        </div>
        <div class="menu-item">
            <img src="/images/product/p1.jpg" alt="Food Item 1">
            <div>
                <h2>Food Item 1</h2>
                <p class="description">Description of food item 1</p>
            </div>
            <span>$10.99</span>
        </div>
        <div class="menu-item">
            <img src="/images/product/p3.jpg" alt="Food Item 1">
            <div>
                <h2>Food Item 1</h2>
                <p class="description">Description of food item 1</p>
            </div>
            <span>$10.99</span>
        </div>
        <div class="menu-item">
            <img src="/images/product/p4.jpg" alt="Food Item 1">
            <div>
                <h2>Food Item 1</h2>
                <p class="description">Description of food item 1</p>
            </div>
            <span>$10.99</span>
        </div>
   
    </div>
    <div class="button-action">
        <a href="#">Save</a>
        <a href="{{route('pdf.menu.download')}}">Download</a>
    </div>
</body>
</html>
