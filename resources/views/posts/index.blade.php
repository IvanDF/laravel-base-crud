@extends('layouts.main-content')

@section('main-content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="card mt-5 has-text-info-dark has-background-link-light">
                <header class="card-header">
                    <p class="card-header-title is-size-3">
                        {{$post['title']}}
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                    <span class="icon">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content has-text-weight-medium is-size-4">
                        {{$post['short_description']}}
                    <br>
                    <small class="is-italic is-size-6">{{$post['author']}}</small>
                    </div>
                </div>
                <footer class="card-footer has-text-weight-bold">
                    <a href="{{ route('posts.show',$post['id'])}}" class="card-footer-item has-text-primary-dark">View</a>
                    <a href="#" class="card-footer-item">Edit</a>
                    <a href="#" class="card-footer-item has-text-danger">Delete</a>
                </footer>
            </div>
        @endforeach
    </div>
@endsection