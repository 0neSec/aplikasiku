<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/path/to/bootstrap.css">
    
</head>
<body>
    @include('partials.navbars')
    
    <div class="container mt-5">
        <!-- Isi kontainer di sini -->
        @yield('isi')
        
        
    </div>
    @include('partials.footer')
    
    
    <script src="/path/to/bootstrap.js"></script>
</body>
</html>