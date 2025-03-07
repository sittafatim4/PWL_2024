@extends('layout')

@section('content')
    <h1>💄 Beauty & Health</h1>

    <div class="product-container">
        <div class="product-card">
            <img src="{{ asset('images/skincare.jpg') }}" alt="Skincare">
            <h2>Skincare Set</h2>
            <p>Complete skincare set for glowing skin.</p>
            <span class="price">150K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/lipstick.jpg') }}" alt="Lipstick">
            <h2>Matte Lipstick</h2>
            <p>Long-lasting and vibrant color lipstick.</p>
            <span class="price">90K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/vitamin.jpg') }}" alt="Vitamin">
            <h2>Vitamin C</h2>
            <p>Boost your immune system with Vitamin C.</p>
            <span class="price">50K</span>
        </div>
    </div>

    <a href="{{ url()->previous() }}" class="back-button">⬅ Back</a>

    <style>
        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
        }
        .price {
            display: block;
            margin-top: 5px;
            font-weight: bold;
            color: #444;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background: #555;
        }
    </style>
@endsection
