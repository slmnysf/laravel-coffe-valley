<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Valley - @yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: white;
            color: black;
            padding: 10px 20px;
            text-align: left;
        }
        header h1 {
            margin: 0;
            color: brown;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: brown;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: burlywood;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        footer {
            background-color: white;
            color: black;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Konten Utama -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
</body>
</html> 
