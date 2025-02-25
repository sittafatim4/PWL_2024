<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
    <!-- Navbar -->
    <div class="nav-container">
        <div class="nav-item" onclick="goTo('{{ url('/') }}')">🏠 Home</div>
        <div class="nav-item" onclick="goTo('{{ url('/sales') }}')">💰 Transaction</div>
        <div class="nav-item" onclick="goTo('{{ url('/user/profile') }}')">👤 Profile</div>
    </div>    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #fff;
            color: #717171;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .nav-container {
            background-color: #222;
            padding: 15px 0;
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 40px;
        }
        .nav-item {
            color: #fff;
            font-size: 14px;
            font-weight: normal;
            cursor: pointer;
        }
        .nav-item:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ededed;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        }
        h1 {
            color: #525151;
            font-size: 24px;
            letter-spacing: 1px;
        }
        a {
            display: block;
            margin: 12px 0;
            color: #585858;
            background-color: #fff;
            padding: 12px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>