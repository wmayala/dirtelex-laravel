<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dirtelex</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/img/bcr_b.png" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
        >
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous">
        </script>

    </head>
    <body style="background-color: #f2f2f2;">
        @extends('layouts.app')
        <div class="d-flex flex-column gap-5">
            <div class="row bg-white">
                <div class="col-2 p-3 d-flex justify-content-center">
                    <img src="/img/bcr_b.png" alt="Logo BCR" width=75 heigth=75>
                </div>
                <div class="col-8 d-flex justify-content-center align-items-center">
                    <div class="fs-2 fw-bold">DIRTELEX - Directorio Telefónico del Exterior</div>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <div class="p-3 text-end">
                                    <a href="{{ url('/dashboard') }}" class="btn btn-sm rounded text-light" style="background-color: #111e60; color: #f2f2f2;">Administración</a>
                                </div>
                            @else
                                {{-- <div class="d-flex justify-content-center py-3">
                                    <img src="/img/bcr_b.png" alt="Logo BCR" width=125 heigth=125>
                                </div> --}}

                                <div class="p-3 text-end">
                                    <a href="{{ route('login') }}" class="btn btn-sm rounded text-light" style="background-color: #111e60; color: #f2f2f2;">Iniciar sesión</a>
                                </div>

                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            @include('layouts.nav_dir')
            <div class="container">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-5 mx-3 text-gray-900 dark:text-gray-100">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
