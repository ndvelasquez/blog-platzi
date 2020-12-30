@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                @endif
                <div class="card-header">
                    <strong><i class="far fa-newspaper"></i>Post Management</strong>
                    <a href="{{ route('posts.create') }}" class="btn btn-outline-primary float-end"><span class="fas fa-plus-circle"></span>Create new post</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="2">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)  
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-outline-warning btn-sm" href="{{ route('posts.edit', $post) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Do you want to delete the post?')" class="btn btn-outline-danger btn-sm" type="submit">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
