@extends('layouts.app')

@section('content')
<h1>Edit Article</h1>

<form action="{{ route('articles.update', ['id' => $article->id]) }}" method="POST">
{{method_field('PATCH')}}

<div class="form-group">
    <input type="text" name="title" id="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ $article->title }}" />
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Content" class="form-control @error('content') is-invalid @enderror">{{ $article->content }}</textarea>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="form-control">Modify</button>
    @csrf
</div>

</form>
@endsection