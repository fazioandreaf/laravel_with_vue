<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue with laravel</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    {{-- <script src="{{asset('/js/app.js')}}"></script> --}}
</head>
<body>
    <div class="conteiner-fluid bg-light text-center text-dark">
        <div class="row">
            <div class="col-12">

                @include('components.header')
            </div>
        </div>
    </div>
    <div id="app">
        @yield('content')
    </div>
    <div class="conteiner-fluid bg-light text-center text-dark">
        <div class="row">
            <div class="col-12">

                @include('components.footer')
            </div>
        </div>
    </div>

</body>
</html>
