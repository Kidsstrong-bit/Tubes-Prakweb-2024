<!-- resources/views/buku/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Book Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text"><strong>Genre:</strong > {{ $item->genre }}</p>
            <p class="card-text"><strong>Penulis:</strong> {{ $ > {{ $item->genre }}</p>
            <p class="card-text"><strong>Penulis:</strong> {{ $item->penulis }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $item->penerbit }}</p>
            <p class="card-text"><strong>Tahun:</strong> {{ $item->tahun }}</p>
            <p class="card-text"><strong>Jumlah:</strong> {{ $item->jumlah }}</p>
            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection