@extends('blog.index')
@section('title', 'new post')
@section('content')

<form action="{{ route('blog.store') }}" method="POST" class="newPost">
    @csrf
    <h1> Create a New Post </h1>
    <label for="title"> Title </label>
    <input type="text" id="title" placeholder="Title " value="{{ old('title')}}" name="title">
    <span class="error">
        @error('title')
        {{ $message }}
        @enderror
    </span>
    <label for="description">Description </label>
    <textarea name="description" id="description" placeholder="add a description "  cols="30" rows="20">{{old('description')}}
    </textarea>
    <span class="error">
        @error('description')
        {{ $message  }}
        @enderror
    </span>
    <input type="submit" value="Create">
</form>


@endsection 