@extends('layout')

@section('content')
    <div class="profile-container">
        <div class="profile-card">
            <img src="{{ asset('images/profile-placeholder.jpg') }}" alt="Profile Picture" class="profile-img">
            <h2 class="profile-name">Alex</h2>
            <p class="profile-role">🌟 POS System User</p>
            <div class="profile-info">
                <p><strong>Email:</strong> alex@example.com</p>
                <p><strong>Phone:</strong> +62 812-3456-7890</p>
                <p><strong>Joined:</strong> January 2024</p>
            </div>
            <a href="{{ url('/edit-profile') }}" class="edit-btn">Edit Profile</a>
        </div>
    </div>

    <style>
        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        .profile-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: -5px;
        }
        .profile-name {
            font-size: 22px;
            color: #333;
            margin-bottom: 5px;
        }
        .profile-role {
            font-size: 14px;
            color: #777;
            margin-bottom: 10px;
        }
        .profile-info p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }
        .edit-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #222;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .edit-btn:hover {
            background-color: #444;
        }
    </style>
@endsection
