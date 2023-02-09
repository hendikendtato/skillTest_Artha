@extends('layout.app')

@section('css')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Master Posisi Pekerjaan</h1>
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
        <a href="{{ route('position.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>No.</th>
                  <th>Nama Posisi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($position AS $pstn)
                <?php $no=0; ?>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pstn['position_name'] }}</td>
                    <td>
                        <a href="{{ route('position.edit', $pstn['id']) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form method="post" action="{{ route('position.destroy', $pstn['id']) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $no++; ?>
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