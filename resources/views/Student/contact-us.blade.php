@extends('components.layout')

@section('content')

<div class="centered" style="background-image: url('images/uploads/yellow.jpg');">
    <div class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <p>Contact Number: 09101583759</p>
            <p>Email: canteenfoodorderingsystem@gmail.com</p>
        </div>
    </div>
</div>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: yellow
    }

    .centered {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    .contact-section {
        border: 2px solid #333;
        border-radius: 16px;
        padding: 40px;
        width: 70%;
        max-width: 600px;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        /* Adding a subtle shadow for depth */
    }

    .contact-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
    }

    .contact-section .contact-info {
        font-size: 20px;
        line-height: 1.6;
        color: #333;
    }

    /* Media Query for smaller screens */
    @media (max-width: 768px) {
        .contact-section {
            width: 90%;
        }
    }
</style>
@endsection