<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="userSurvey">
<head>
    @include('includes.head')
</head>
<body>
    <div id="page" class="container">
        <header class="row">
            @include('includes.header')
        </header>
        
        <div id="main" class="row" ng-controller="surveyController">
                @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
