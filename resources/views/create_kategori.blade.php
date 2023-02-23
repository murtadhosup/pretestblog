@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategori Baru</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/postskategori">
        @csrf
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required value="{{ old('title') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ 'message' }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection