@extends('blog.index')
@section('title', 'home')
@section('content')
<section class="home">
    @if(count($posts) > 0) 
        @foreach($posts as $post) 
        <main>
            <div class="post-text">
                <h2>{{ $post['title'] }}</h2>
                <p class="date"> {{ $post['Date'] }} </p>
                <p class="description">
                        @if(strlen($post['description']) <= 25) 
                            {{ $post['description'] }} 
                        @else 
                            {{ substr($post['description'], 0, 30) }}
                    @endif
                </p>
            </div>
            <a href="{{ route('blog.show',$post->id) }}" class="viewMore">view more </a>
        </main>
        @endforeach
    @else   
        <h1 style="margin-top:2rem">Posts Not Found </h1>
    @endif 
</section>
@endsection 