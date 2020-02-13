@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ini Halaman Tabungan Siswa
                        <a href="{{route('tabungan.index')}}" class="float-right">
                                Kembali
                            </a>
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <form action="" method="POST">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Siswa</th>
                                        <th>Nama Kelas</th>
                                        <th>Jumlah Uang Tabungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php $no = 1; @endphp
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$data->siswa->nama}}</td>
                                            <td>{{$data->siswa->kelas}}</td>
                                            <td>{{$data->jumlah_uang}}</td>
                                        </tr>
                                </tbody>
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
