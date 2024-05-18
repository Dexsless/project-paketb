@extends('layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                    <a href="{{route('mahasiswa.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror"
                            name="nim" value="{{$mahasiswa->nim}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        name="nama" value="{{$mahasiswa->nama}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror"
                            name="kelas" value="{{$mahasiswa->kelas}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                        name="jenis_kelamin" @if ($mahasiswa->jenis_kelamin == 1) value="Laki-Laki" @else value="Perempuan"
                        @endif disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror"
                            name="agama" value="{{$mahasiswa->agama}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            name="alamat" value="{{$mahasiswa->alamat}}" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Foto Mahasiswa</label>
                        <br>
                        <img src="{{asset('images/mahasiswa/'.$mahasiswa->foto)}}" width="150" height="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
