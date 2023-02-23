@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Kategori</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/postsblog">
        @csrf
        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>

         <div class="mb-3">
            <label for="tanggal_publish" class="form-label">Tanggal Publish</label>
            <input type="text" class="form-control" id="tanggal_publish" name="tanggal_publish" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="image" class="form-control" id="gambar" name="gambar" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <input type="text" class="form-control" id="konten" name="konten" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Blog</button>
    </form>
</div>
@endsection