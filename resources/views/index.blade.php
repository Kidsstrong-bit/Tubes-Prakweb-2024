<!-- resources/views/buku/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary">Create New Book</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->genre }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->tahun }}</td>
                    <td>{{ $buku->jumlah }}</td>
                    <td>
                        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection