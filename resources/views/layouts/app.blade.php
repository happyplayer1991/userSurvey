<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="userSurvey" class="h-100">
<head>
    @include('includes.head')
</head>
<body class="h-100 bg-pink">
    @include('includes.header')
    
    @yield('content')

    @include('includes.footer')
</body>
</html>
