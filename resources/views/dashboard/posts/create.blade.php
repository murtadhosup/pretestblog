@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name ="title" required autofocus value ="{{ old('title') }}">
             @error('body')
            <p class="invalid-fetback">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name ="slug" required value ="{{ old('title') }}">
            @error('slug')
                <div class ="invalid-feedback">
                    {{ 'message' }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category </label>
            <select class="form-select form-select-sm" name="category_id">
                <option selected>Open this select menu</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body </label>
             
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
            {{-- diatas untuk menulis apa yang kita unputkan kemudian di kirim melaluii kontrollernya --}}
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
<script>
    cons title = document.querySelector('#title')
    cons title = document.querySelector('#slug')

    tittle.addEventListener('change', function (){
        fetch('dashboard/posts/createSlug?title='+titlevalue)
        .then (response => response.json())
        .then (data =>slug.value = data.slug)
    });

    document.addEventListener ('trix-file--accept', function (e){
        e.preventDefault();
    })
</script>
@endsection