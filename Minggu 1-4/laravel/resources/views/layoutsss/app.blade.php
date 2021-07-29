<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getLocale())}}">
<head>
    <meta charset="UTF 8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('appname')}}</title>
</head>
<body>
    <div class="jumbotrom jumbotrom-fluid">
        <div class="container">
        @yield('content', 'Default content')
        </div>
    </div>
</body>
</html>