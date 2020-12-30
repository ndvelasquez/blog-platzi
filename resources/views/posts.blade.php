@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)    
            <div class="card mb-4">
                <div class="card-body">
                    @if ($post->image)
                        <img src="{{ $post->get_image }}" alt="Post image" class="card-img-top img-fluid img-thumbnail" style="height: 18rem">
                    @elseif ($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">

                        </div>
                    @endif
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">
                        {{ $post->extract }}
                        <a href="{{ route('post', $post) }}">Leer Más...</a>
                    </p>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            @endforeach
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
