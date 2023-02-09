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
        <div class="container mt-3 mb-3">
            <div class="card">
                <div class="card-header">
                    <h4>Form Pendaftaran Calon Pelamar</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pelamar.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Panggilan</label>
                            <input type="text" class="form-control" name="nick_name" placeholder="Masukkan Nama Panggilan">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Tempat Lahir</label>
                            <input type="text" class="form-control" name="birth_place" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="birth_date" placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Agama</label>
                            <select class="form-control" name="religion" id="religion">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nomor Telepon</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Masukkan Nomor Telepon">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Posisi yang dilamar</label>
                            <select class="form-control" name="position" id="position">
                                <option value="">Pilih Jabatan</option>
                                @foreach($position AS $posisi)
                                <option value="{{ $posisi['id'] }}">{{ $posisi['position_name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <textarea class="form-control" name="address" id="address"rows="10"></textarea>
                        </div>
                        <a href="{{ url('/') }}" class="btn btn-md btn-danger">CANCEL</a>
                        <button type="submit" class="btn btn-md btn-primary">SUBMIT</button>
                    </form>
                </div>
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