@extends('layouts.main-content')

@section('main-content')
    <div class="card container mt-5">
        <div class="card-content">
            <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">{{$post['title']}}</p>
                <p class="subtitle is-6 has-text-info-dark">@ {{$post['author']}}</p>
            </div>
            </div>

            <div class="content">
            {{ $post['description'] }}
            <br>
            <time datetime="2016-1-1">{{$post['created_at']}}</time>
            </div>
        </div>
    </div>
@endsection