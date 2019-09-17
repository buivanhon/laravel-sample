@extends('layouts.app')

@section('content')

<h1>Article <a href="{{ route('articles.create') }}">[+]</a></h1>

<table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created</th>
                <th>Modified</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                <td>{{ $article->created_at }}</td>
                <td>{{ $article->updated_at }}</td>
                <td>
                    <a href="{{ route('articles.show', ['id' => $article->id]) }}">show</a>
                    <a href="{{ route('articles.edit', ['id' => $article->id]) }}">edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
