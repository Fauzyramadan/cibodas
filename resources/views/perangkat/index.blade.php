@extends('layouts.app')

@section('title','Data Perangkat Desa Cibodas')

@section('content')

<div class="container">

    <a href="/admin/perangkat/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1
                @endphp
                @foreach ($perangkat as $perangkat)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$perangkat->title}}</td>
                    <td>{{$perangkat->description}}</td>
                    <td>
                        <img src="/image/{{$perangkat->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('perangkat.edit', $perangkat->id) }}" class="btn btn-warning">Edit</a>
                        <br>

                        <form action="{{route('perangkat.destroy', $perangkat->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <br> <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection