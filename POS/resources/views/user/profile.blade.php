@extends('layouts.app')

@section('content')
    <h1>👤 User Profile</h1>
    
    <div class="profile-container">
        <img src="{{ asset('images/user-avatar.png') }}" alt="User Avatar" class="avatar">
        <h2>{{ $name }}</h2>
        <p>User ID: {{ $id }}</p>
    </div>

    <a href="{{ url('/') }}" class="back-button">⬅ Back to Home</a>

    <style>
        .profile-container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
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
