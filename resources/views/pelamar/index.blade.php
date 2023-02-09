@extends('layout.app')

@section('css')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pelamar</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pelamar</li>
    </ol>
</div>
@endsection
@section('content')
<div class="card sm mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Nomor Handphone</th>
                  <th>Posisi yang diambil</th>
                  <th>Jadwal Wawancara</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($pelamar AS $plm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $plm['full_name'] }}</td>
                    <td>{{ $plm['phone_number'] }}</td>
                    <td>{{ $plm['posisi'] }}</td>
                    <td>{{ date('d M Y H:i:s', strtotime($plm['jadwal'])) }}</td>
                    <td>{{ $plm['status'] }}</td>
                    <td>
                        @if($plm['status'] == 'Pengajuan')
                            <a href="{{ route('jadwal.show', $plm['id']) }}" class="btn btn-sm btn-info">Jadwalkan Wawancara</a>
                        @else
                            <a href="{{ route('jadwal.edit', $plm['id']) }}" class="btn btn-sm btn-warning">Update Jadwal</a>
                        @endif
                    </td>
                    <td>
                        @if($plm['status'] == 'Lolos' || $plm['status'] == 'Tidak Lolos')
                            <a href="{{ route('hasil.edit', $plm['id']) }}" class="btn btn-sm btn-warning">Update Hasil Wawancara</a>   
                        @else 
                            <a href="{{ route('hasil.show', $plm['id']) }}" class="btn btn-sm btn-info">Hasil Wawancara</a>
                        @endif                                               
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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