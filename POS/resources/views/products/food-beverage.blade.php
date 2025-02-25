@extends('layouts.app')

@section('content')
    <h1>🍽️ Food & Beverage</h1>

    <div class="product-container">
        <div class="product-card">
            <img src="{{ asset('images/coffee.jpg') }}" alt="Coffee">
            <h2>Coffee</h2>
            <p>Rich and aromatic brewed coffee.</p>
            <span class="price">30K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/tea.jpg') }}" alt="Tea">
            <h2>Tea</h2>
            <p>Refreshing green tea with a hint of mint.</p>
            <span class="price">25K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/sandwich.jpg') }}" alt="Sandwich">
            <h2>Sandwich</h2>
            <p>Delicious sandwich with fresh ingredients.</p>
            <span class="price">45K</span>
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
