@extends('layout')

@section('content')
    <h1>👶 Baby & Kid Care</h1>

    <div class="product-container">
        <div class="product-card">
            <img src="{{ asset('images/baby-wipes.jpg') }}" alt="Baby Wipes">
            <h2>Baby Wipes</h2>
            <p>Soft and gentle wipes for your baby.</p>
            <span class="price">20K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/baby-shampoo.jpg') }}" alt="Baby Shampoo">
            <h2>Baby Shampoo</h2>
            <p>Tear-free formula for delicate baby hair.</p>
            <span class="price">30K</span>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/baby-lotion.jpg') }}" alt="Baby Lotion">
            <h2>Baby Lotion</h2>
            <p>Gentle hydration for sensitive baby skin.</p>
            <span class="price">40K</span>
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
