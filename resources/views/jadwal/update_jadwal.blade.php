@extends('layout.app')

@section('css')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Jadwalkan Wawancara</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pelamar</li>
    </ol>
</div>
@endsection
@section('content')
<div class="table-responsive p-3">
    <table class="table align-items-center table-flush" id="dataTable">
        <tr>
            <th>Nama Lengkap</th>
            <td>{{ $pelamar['full_name'] }}</td>
        </tr>
        <tr>
            <th>Nama Panggilan</th>
            <td>{{ $pelamar['nick_name'] }}</td>
        </tr>
        <tr>
            <th>Tempat / Tanggal Lahir</th>
            <td>{{ $pelamar['birth_place'] }} / {{ date('d-m-Y', strtotime($pelamar['birth_date'])) }} </td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>{{ $pelamar['religion'] }}</td>
        </tr>
        <tr>
            <th>Nomor Handphone</th>
            <td>{{ $pelamar['phone_number'] }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $pelamar['address'] }}</td>
        </tr>
    </table>
</div>
<div class="card sm mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <form action="{{ route('jadwal.update', $jadwal['id']) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                @csrf  
                @method('PUT')
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Jadwal Wawancara</label>
                        <input type="datetime-local" class="form-control" name="jadwal" value="{{ old('jadwal', $jadwal['jadwal']) }}" placeholder="Jadwal Wawancara">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="70" rows="3">{{ old('keterangan', $jadwal['keterangan']) }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('pelamar.index') }}" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $('#dataTable').DataTable();
</script>
@endpush