@extends('components.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="background-image: url('images/bg.jpg');">

</body>

<style>
    /* styles.css */
    body {
        background-size: cover;
        /* Ensure the background image covers the entire body */
        background-repeat: no-repeat;
        /* Prevent the background image from repeating */
        font-family: Arial, sans-serif;
        /* Set a default font-family for better readability */
    }

    .home-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: #333;
        /* Change the color as needed */
        margin-top: 50px;
        /* Adjust margin from top */
    }

    .button-image {
        width: 500px;
        /* Adjust the image width as per your requirement */
        height: auto;
        margin-bottom: 15px;
        /* Adjust the spacing between image and text */
    }

    .button-title {
        font-size: 50px;
        /* Adjust the font size as needed */
        font-weight: bold;
        /* Optionally make the text bold */
    }
</style>

</html>
@endsection