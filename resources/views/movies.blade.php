<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="otro col-xs-8 col-xs-offset-2">
                <div id="app">
                    <header-component class="cp" title="WATCH MOVIES"></header-component>
                    <movies-component ></movies-component>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
<style type="text/css">
   body{ background-image: url(/assets/fondo.jpg) ;
   }

   .app {
       background-color: #010101;   
   }
    </style>

</body>

</html>