<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>

    <!-- CSS Assets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> 
    @stack('styles')
</head>
<body class="bg-gradient-primary">
        <x-header />


    <div class="container-fluid" style="min-height: 85vh;">
        <main class="col-md-12 col-lg-12">
            {{ $slot }}
        </main>
    </div>



        <x-footer />

    <!-- JS Assets -->
   
    <script src="{{ asset('public/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
<x-toast />
    @stack('scripts') 
</body>
</html>
