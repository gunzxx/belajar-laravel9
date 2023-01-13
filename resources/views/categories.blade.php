@extends('layouts/main')

@section('container')

    @if($categories->count())
        <h1>{{ $title }}</h1>

        <div class="row mb-3 justify-content-center">
            <div class="col-md-6">
                <form action="/blog/search">
                    <div class="input-group mb-3">
                        <input value="{{ request("keyword") }}"  type="text" name="keyword" class="form-control clearInput" placeholder="Cari disini" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-danger clearBtn" type="button">Clear</button>
                        <button class="btn btn-danger" type="submit" id="cari2">Search</button>
                    </div>                                             
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-4 d-flex">
                    <a href="/blog?category={{ $category->slug }}">
                        <div class="card bg-dark text-white p-0">
                            <img src="https://source.unsplash.com/500x500?{{ $category->slug }}" class="card-img" title="{{ $category->slug }}">
                            <div style="background-color: rgba(0, 0, 0, .5)" class="card-img-overlay d-flex justify-content-center align-items-center">
                                <h5 class="card-title">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <p>Kategori kosong.</p>
    @endif
@endsection

