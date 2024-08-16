<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dirtelex</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
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
        <div class="container-fluid">
            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-50 p-6 text-center z-10 justify-content-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            {{-- <div class="d-flex justify-content-center py-3">
                                <img src="/img/bcr_b.png" alt="Logo BCR" width=125 heigth=125>
                            </div> --}}

                            <div class="mt-4 p-2 text-end">
                                <a href="{{ route('login') }}" class="btn btn-sm rounded text-light" style="background-color: #111e60; color: #f2f2f2;">Iniciar sesión</a>
                            </div>

                        @endauth
                    </div>
                @endif

                <div class="container">
                    <div class="">

                    </div>
                    CONTENIDO
                </div>


            </div>
        </div>
    </body>
</html>
