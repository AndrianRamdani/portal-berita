@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">Daftar Hobi</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                    <a href="{{ route('hobi.create')}}" class="btn btn-primary">
                    Tambah Hobi
                    </a>
                    <table class="table">
                        <thead>
                            <th>Jenis Hobi</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                           @foreach ($data as $item)
                            <tr>
                                <td>{{$item->hobi}}</td>
                                <td>
                                    <form action="{{route('hobi.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info" href="{{route('hobi.show', $item->id)}} ">Lihat</a>
                                    <a class="btn btn-warning" href="{{route('hobi.edit', $item->id)}} ">Edit</a>
                                    <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
