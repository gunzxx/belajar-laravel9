@extends('dashboard.layouts.main')
<?php

// dd(auth()->user()->user_id);
// dd($posts);

?>
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">My Posts</h1>
    </div>

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new posts</a>

    @if(session()->has('sukses') )
        <p class="alert alert-success mb-3 alert-dismissible col-lg-8">{{ session('sukses'); }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </p>
    @endif

    <div class="table-responsive col-lg-8 mb-5">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post->category['name'] }}</td>
                        <td style="display: flex; padding:10px;">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info text-light" style="text-decoration:none;" title="Detail">
                                <span data-feather="eye"></span>
                            </a>
                            
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning ms-2" title="Edit">
                                <span data-feather="edit"></span>
                            </a>

                            <div class="col-lg-8 d-flex">
                                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="ms-2">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete?')" title="Delete">
                                        <span data-feather="x-circle"></span>
                                    </button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-8">
        {{ $posts->links() }}
    </div>
@endsection