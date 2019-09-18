@extends('layouts.app')

@section('content')
<h1>Show Article <form method="post" action="{{ route('articles.destroy', ['id' => $article->id]) }}" onsubmit="return confirm('Are you sure you want to delete this item?');" style="display:inline">
    <input type="hidden" name="_method" value="DELETE">@csrf
    <button class="btn">Delete</button>
</form></h1>

<form action="{{ route('articles.update', ['id' => $article->id]) }}" method="POST">
{{method_field('PATCH')}}

@include('article._form')

<div class="form-group">
    <button type="submit" class="form-control">Modify</button>
    @csrf
</div>

</form>

@endsection