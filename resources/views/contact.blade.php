{{-- @extends('name') --}}
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Contacto</title>
</head>
<body>
<div id="app">                
    <header-component class="container"></header-component>
    <contact-component> </contact-component>
    {{-- <mapa-component></mapa-component> --}}
    <br/><br/><br/>
    <footer-component></footer-component>
</div>
</body>

</html>
<style>
       body{ background-image: url(/assets/fondo.jpg) ;
   }
</style>