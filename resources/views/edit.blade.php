<!-- resources/views/buku/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('buku.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <('content')
    <h1>Edit Book</h1>
    <form action="{{ route('buku.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div classlabel for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control"="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $item->judul }}" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            < value="{{ $item->judul }}" required>
        </div>
        <div class="form-group">
            <input type="text" name="genre" id="genre" class="form-control" value="{{ $item->genre }}" required>
        </div>
        <div class="form-group">
            <label for="penlabel for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ $item->genre }}" required>
        </div>
        <div class="formulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="{{ $item->penulis }}" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="-group">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="{{ $item->penulis }}" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" id="penerbit" class="form-control" value="{{ $item->penerbit }}" required>
penerbit" class="form-control" value="{{ $item->penerbit }}" required>
        </div>
        <div class="form-group">
            <label for        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{="tahun">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control" value="{{ $item->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $item->jumlah }}" required>
        </div>
        < $item->tahun }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="formbutton type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection