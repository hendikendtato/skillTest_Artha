<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title>RuangAdmin - Dashboard</title>
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/select2/dist/css/select2.css') }}" rel="stylesheet" />
        <!-- <link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" /> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
        @yield('css')
    </head>

    <body id="page-top">
        <div class="container-fluid">
            <div class="jumbotron">
                <h1 class="display-4">Halo Selamat Datang!</h1>
                <p class="lead">Aplikasi Rekruitmen pegawai PT ABC</p>
                <hr class="my-4">
                <p>Pilih satu peran yang akan digunakan</p>
                <a class="btn btn-primary" href="{{ route('pelamar.create') }}" role="button">Pelamar</a>
                <a class="btn btn-info" href="{{ route('pelamar.index') }}" role="button">Administrator</a>
            </div>
        </div>
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/dist/js/select2.min.js') }}"></script>
        @stack('js')
    </body>
</html>