@extends('layouts.app')

@section('content')
    <h1>🏡 Home Care</h1>

    <div class="product-container">
        <div class="product-card">
            <img src="{{ asset('images/detergent.jpg') }}" alt="Detergent">
            <h2>Liquid Detergent</h2>
            <p>Powerful stain removal with a fresh scent.</p>
            <span class="price">35K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/air-freshener.jpg') }}" alt="Air Freshener">
            <h2>Air Freshener</h2>
            <p>Long-lasting fragrance for your home.</p>
            <span class="price">25K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/dish-soap.jpg') }}" alt="Dish Soap">
            <h2>Dish Soap</h2>
            <p>Gentle on hands, tough on grease.</p>
            <span class="price">20K</span>
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
