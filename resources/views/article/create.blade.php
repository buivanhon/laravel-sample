@extends('layouts.app')

@section('content')
<h1>New Article</h1>

<form action="{{ route('articles.store') }}" method="POST">

@include('article._form')

<div class="form-group">
    <button type="submit" class="form-control">Add new</button>
    @csrf
</div>

</form>

@endsection