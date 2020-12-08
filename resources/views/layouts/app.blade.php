<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ossian') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('list') }}" class="nav-link">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('create') }}" class="nav-link">Crear imagen</a>
                </li>

            </ul>

        </div>
    </nav>


{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">Inicio</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">Crear subasta</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
    <main class="py-4">
        @yield('content')
    </main>

{{--    <footer class="card-footer font-small mdb-color pt-4 bg-white shadow-sm">--}}
{{--        <div class="container text-center text-md-left">--}}
{{--            <div class="row text-center text-md-left mt-3 pb-3">--}}
{{--                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">--}}
{{--                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-cookies" data-toggle="modal" data-target="#condition">--}}
{{--                        Términos y condiciones--}}
{{--                    </a>--}}
{{--                    <div class="modal fade" id="condition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
{{--                        <div class="modal-dialog modal-xl">--}}
{{--                            <div class="modal-content modal-box">--}}
{{--                                @include('includes.condition')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                <hr class="w-100 clearfix d-md-none">--}}

{{--                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">--}}
{{--                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-legal" data-toggle="modal" data-target="#legal">--}}
{{--                        Bases legales--}}
{{--                    </a>--}}
{{--                    <div class="modal fade" id="legal">--}}
{{--                        <div class="modal-dialog modal-xl">--}}
{{--                            <div class="modal-content modal-box">--}}
{{--                                @include('includes.legal')--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <hr class="w-100 clearfix d-md-none">--}}

{{--                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">--}}
{{--                    <a href="#" class="text-uppercase mb-4 font-weight-bold modal-legal" data-toggle="modal" data-target="#contact">--}}
{{--                        Contacto--}}
{{--                    </a>--}}
{{--                    @include('includes.contact')--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <hr>--}}
{{--            <!-- Grid row -->--}}
{{--            <div class="row d-flex align-items-center">--}}
{{--                <div class="col-md-12 col-lg-12">--}}
{{--                    <p class="text-center py-3">© 2020 Copyright:--}}
{{--                        <a href="#">--}}
{{--                            <strong> Punchline.com</strong>--}}
{{--                        </a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
</div>
</body>
</html>
{{--<script>--}}
{{--    (function(){--}}
{{--        $('.modal').on('show.bs.modal', function (event) {--}}
{{--            if (!$(this).data('template')) {--}}
{{--                $(this).data('template', $(this).html())--}}
{{--            } else {--}}
{{--                $(this).html($(this).data('template'))--}}
{{--            }--}}
{{--        })--}}
{{--    })()--}}
{{--</script>--}}
