@extends('layout.app')

@section('css')
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Posisi</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('position.index') }}">Posisi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update</li>
    </ol>
</div>
@endsection
@section('content')
<div class="card sm mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <form action="{{ route('position.update', $position['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
            <div class="row">
                <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Posisi</label>
                        <input type="text" class="form-control" name="position_name" value="{{ old('position_name', $position['position_name']) }}" placeholder="Masukkan Nama Karyawan">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endpush