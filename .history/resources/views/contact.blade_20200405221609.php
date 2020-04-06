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
    <div class="justify-content-center">
                <div id="app" class="form">
                    {{-- <header-component></header-component> --}}
                    {{-- <contact-component> </contact-component> --}}
                    <h2>Formulario de contacto</h2>
<form action={{route('contact')}} method="POST">
     {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre</label>
        <input name="name" type="text">
    </div>
    <div class="form-group">
        <label for="name">Mensaje</label>
                                <input name="msg" type="text">
    </div>
    <div class="form-group">
        <button type="submit" id='btn-contact' class="btn">Enviar</button>
    </div>
</form>
                </div>
            </div>
   
</body>

</html>
<style>
       body{ background-image: url(/assets/fondo.jpg) ;
   }
</style>