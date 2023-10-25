<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"/>

    <title>Alif RIzqullah Maruf | @yield('title')</title>
</head>
<body >
    @include('layouts.navbar')
    {{-- @yield('container') --}}
    @include('layouts.content')
    {{-- @yield('content') <!-- Ini adalah tempat di mana konten dinamis akan dimasukkan --> --}}
	<div class="container">

	</div>
    @include('layouts.footer')
	{{-- <script src="main.js"></script> --}}
	<script src="js/main2.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>