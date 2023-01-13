@extends('layouts.main')

@section('container')
    @if (isset($post))
    <?php $author = $post->author; $category = $post->category; ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="mb-4">{{ $post->title }}</h3>
        
                    <p>By <a href="/blog?author={{ strtolower($author->username) }}">{{ $author->name }}</a> in category <a href="/blog?category={{ $category->slug }}">{{ $category->name }}</a></p>
                    {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" title="{{ $post->title }}"> --}}
                    @if($post->image!=null)
                        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" title="{{ $post->title }}">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" title="{{ $post->title }}">
                    @endif
                    
                    <article>
                        {!! $post->content !!}
                    </article>
                    <a class="mt-5" href="/blog">Back to blog</a>
                </div>
            </div>
        </div>
    @else
        <p>Postingan tidak ditemukan.</p>
    @endif

    <br>
    
@endsection
