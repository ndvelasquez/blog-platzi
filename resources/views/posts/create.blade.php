@extends('layouts.app')
  
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header">
                        <i class="fas fa-plus"></i>
                        <strong>Create New Post</strong>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Post title" required>
                                <label for="floatingInput">Post title *</label>
                              </div>
                              <label for="image">Post Image</label>
                              <input id="image" class="form-control mb-3" type="file" name="image">
                              <div class="form-floating mb-3">
                                <textarea class="form-control" name="body" id="floatingBody" rows="10" placeholder="content of the article" required></textarea>
                                <label for="floatingBody">Content *</label>
                              </div>
                              <div class="form-floating mb-3">
                                <textarea class="form-control" name="iframe" id="floatingIframe" placeholder="Embembed content (video, images, etc)"></textarea>
                                <label for="floatingBody">Embed content</label>
                              </div>
                              <input class="btn btn-primary" type="submit" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection