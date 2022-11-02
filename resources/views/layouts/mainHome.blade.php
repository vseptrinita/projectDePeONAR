<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DePeOnar</title>

    <!-- link css depeonar -->
    <link rel="stylesheet" href="depeonar.css"> 

    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- link boostrap icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
</head>
<body>
<header>
    <nav class="navbars">
            @include('layouts.partials.navbarMain')
        <div class="container mt-4">
            @yield('container')
        </div>

        <br><br>
        <footer class="footer_mainHome">
<h6 class="copy text-center">All Rights Reserved &copy; By VirginiaSeptrinita</h6>

</footer>
</body>
</html>
