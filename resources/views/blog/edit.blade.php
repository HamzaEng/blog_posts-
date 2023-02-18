@extends('blog.index')
@section('title', 'edit post')
@section('content')

<form action="{{ route('blog.update', $post->id) }}" method="POST" class="newPost">
    @csrf
    @method('PATCH')
    <h1> Edit Post </h1>
    <label for="title"> Title </label>
    <input type="text" id="title" placeholder="Title " value="{{ $post->title }}" name="title">
    <span class="error">
        @error('title')
        {{ $message }}
        @enderror
    </span>
    <label for="description">Description </label>
    <textarea name="description" id="description" placeholder="add a description "  cols="30" rows="20">{{ $post->description}}
    </textarea>
    <span class="error">
        @error('description')
        {{ $message  }}
        @enderror
    </span>
    <input type="submit" value="Edit">
</form>


@endsection 