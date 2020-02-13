@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Daftar Siswa</div>

                <div class="card-body">

                    <form action="{{route('siswa.update', $siswa->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Masukkan Nama Siswa</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$siswa->nama}}" name="nama" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">Masukkan Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="{{$siswa->kelas}}" name="kelas" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
