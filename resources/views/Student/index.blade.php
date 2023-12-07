@extends('components.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 30px;
            border-bottom: 2px solid #ccc;
        }

        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border: 1px solid #eee;
            border-radius: 8px;
            margin-bottom: 20px;
            width: 30%;
            /* Adjust as needed */
            transition: transform 0.3s ease-in-out;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .menu-item img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .menu-item:hover img {
            transform: scale(1.1);
        }

        .menu-item p {
            margin: 10px 0 5px;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Food Menu</h1>

        <h2>Food</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/Bihon.png" alt="Bihon">
                <p>Bihon - P 20.00</p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/siomai.webp" alt="Siomai">
                <p>Siomai- P 30.00</p>
            </li>
            <!-- Add more starters here -->
        </ul>
        <h2>Cofee</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/nescafe.jpg" alt="Creamy white">
                <p>Creamy white - P 15.00</p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/bearbrand.jpg" alt="Bearbrand">
                <p>bearbrand - P 25.00</p>
            </li>
            <!-- Add more starters here -->
        </ul>
        <h2>JunkFoods</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/piatos.webp" alt="Piatos">
                <p>Piatos - P 15.00 </p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/nova.jpg" alt="Nova">
                <p>Nova - P 15.00</p>
            </li>
            <!-- Add more starters here -->
        </ul>
        <h2>Candy</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/maxx.jpg" alt="Maxx">
                <p>Maxx - P 2.00</p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/mentos.jpg" alt="Mentos">
                <p>Mentos - P 2.00</p>
            </li>
            <!-- Add more starters here -->
        </ul>
        <h2>Drinks</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/coc.webp" alt="Coca cola">
                <p>Coca-cola - P 15.00</p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/spr.webp" alt="Sprite">
                <p>Sprite - P 15.00</p>
            </li>
            <!-- Add more main courses here -->
        </ul>

        <h2>Desserts</h2>
        <ul>
            <li class="menu-item">
                <img src="images/uploads/halo.jpg" alt="Halo-Halo">
                <p>Halo-Halo - P 35.00</p>
            </li>
            <li class="menu-item">
                <img src="images/uploads/ice.jpg" alt="Ice Cream ">
                <p>Ice Cream - P 25.00</p>
            </li>
            <!-- Add more desserts here -->
        </ul>
    </div>
</body>

</html>

@endsection