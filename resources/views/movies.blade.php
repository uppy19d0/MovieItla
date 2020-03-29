<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stulesheet" href="{{asset('css/app.css')}}">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div id="app">
                    <header-component title="Movie"></header-component>
                    <movie-component></movie-component>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>