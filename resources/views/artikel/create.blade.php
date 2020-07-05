@extends('layouts.master')

@section('content')

<div class="container bg-white">
    <div class="card-body">
        <h3>Form Artikel</h3>
        <form action="{{url('/artikel')}}" method="POST" class="was-validated">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Artikel:</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <br>
                <textarea class="form-control" placeholder="Masukkan Isi Artikel" name="isi" id="isi" cols="30" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" class="form-control" id="slug" placeholder="Masukkan Slug" name="slug" required>
            </div>
            <div class="form-group">
                <label for="tag">Tag:</label>
                <input type="text" class="form-control" id="tag" placeholder="Masukkan Tag" name="tag" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection