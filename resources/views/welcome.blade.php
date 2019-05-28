<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <meta name="api-base-url" content="{{ url('demos/app') }}" />
</head>
<body>
    <div class="container">
        <div id="example"></div>
    </div>
    <footer>
        <div class="container">
            <h2>
                Footer
            </h2>
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>