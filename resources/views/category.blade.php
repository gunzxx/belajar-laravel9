@extends('layouts/main')

@section('container')
    <h2 class="mb-4">Category Name : {{ $title }}</h2>

    @if(!isset($posts)||count($posts)<=0)
        <p>Postingan dengan kategori {{ $title }} masih kosong.</p>
    @else
        <div class="container">
            <div class="row d-flex align-items-stretch">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-light">
                        <a href="/blog/category/{{ $post->category->slug }}">
                            <div class="position-absolute bg-dark text-light px-3 py-2 category-name">{{ $post->category->name }}</div>
                        </a>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img card-img-top" title="{{ $post->category->name }}">
                        <div class="card-body">
                            <h3><a href="/blog/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>

                            <p>
                                <small>
                                    By <a href="/blog/authors/{{ strtolower($post->author->username) }}">{{ $post->author->name }}</a> 
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p>{{ $post->excerpt }}</p>
                            <a href="/blog/post/{{ $post->slug }}" class="btn btn-primary">Readmore</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @endif
@endsection

