<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Home</title>
</head>

<body>
                <div id="app">
                    <header-component class="cp"></header-component>
                    <div class="container">
                    <movies-component class="cp2" title="WATCH MOVIES"></movies-component>
                    </div>
                </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
<style type="text/css">
   /* body{ background-image: url(/assets/fondo.jpg) ;
   } */
   .container {
       background-color: #1e1b26;
   }

   .cp2 {
      
   }
    </style>

</body>

</html>