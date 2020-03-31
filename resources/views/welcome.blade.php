<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--<script>window.Laravel = {csrfToken: '{{ csrf_token() }}' }</script>-->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{ config('app.name')}}</title>
        
    </head>
    <body class="bg-light"> 
        <div id="app">
            {{-- <example-component></app-layout> --}}
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
