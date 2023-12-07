@extends('components.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Canteen Food Ordering System</title>
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
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .system-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>About Canteen Food Ordering System</h1>
        <img src="images/uploads/canteen.jpg" alt="Canteen Food Ordering System" class="system-image">
        <p>
            The Canteen Food Ordering System is designed to streamline the process of ordering food items within a canteen . It offers a user-friendly interface for students to browse through the available menu items, choose their orders, and make payments securely.
            <br><br>
            With this system, students can easily view the menu categories, select their desired items, customize orders if needed, and complete the checkout process efficiently.
            <br><br>
            The system also provides features for canteen admin to manage orders, update the menu, and ensure timely pick-up of food to students.
        </p>
    </div>
</body>

</html>

@endsection