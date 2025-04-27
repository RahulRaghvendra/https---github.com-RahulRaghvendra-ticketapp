<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
    <meta name="robots" content="noindex">
    <META NAME="robots" CONTENT="nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('public/assets/js/vendor/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{asset('public/assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/assets')}}/css/bootstrap.min.css">
 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css"
    href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
{{-- our custom code  --}}
 
    @stack('css_or_js') 
</head>
<body class="">
    
 
    {{ $slot }}   
    
    
    
    <x-toast />
    @stack('scripts') 
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   

      <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
</body>

<script>
    function closeChildBox() {
    $('.carousel__button').trigger('click');
}
    <?php if (@Session::get('success')) { ?>
setTimeout(function() {
    window.parent.location.reload(1);
}, 1000);
<?php } ?>
    </script>
</html>