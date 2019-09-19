<div class="form-group">
    <input type="text" name="title" id="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ $article->title }}" required="required" />
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Content" class="form-control @error('content') is-invalid @enderror" required="required">{{ $article->content }}</textarea>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>