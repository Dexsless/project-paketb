@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data koperasi
                    <a href="{{route('koperasi.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Id Mahasiswa</label>
                        <input type="text" class="form-control @error('mahasiswa_id') is-invalid @enderror"
                            name="mahasiswa_id" value="{{$koperasi->mahasiswa_id}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror"
                            name="jumlah" value="{{$koperasi->jumlah}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal</label>
                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror"
                            name="tanggal" value="{{$koperasi->tanggal}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
