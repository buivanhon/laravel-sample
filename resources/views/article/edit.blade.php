@extends('layouts.app')

@section('content')
<h1>Edit Article</h1>

<form action="{{ route('articles.update', ['id' => $article->id]) }}" method="POST">
{{method_field('PATCH')}}

@include('article._form')

<div class="form-group">
    <button type="submit" class="form-control">Modify</button>
    @csrf
</div>

</form>
@endsection