@extends('blog.index')
@section('title', 'post')
@section('content')
<section class="showSection">
        <h1 >{{ $post->title }}</h1>
        <p class="date">{{ $post->Date }} </p>
        <p class="description" > {{ $post->description }} </p>
        <div class="post-btns" >
            <a href="{{ route('blog.edit', $post->id) }}">Edit</a>
            <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
</section>

@endsection 