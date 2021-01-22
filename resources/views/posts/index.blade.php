@extends('layouts.main-content')

@section('main-content')
    <div class="container">
        @if (session('deleted'))
            <div class="message-danger">
                <div class="notification is-danger is-light">
                    {{session('deleted')}} Eliminato con successo
                </div>
            </div>
        @endif
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
                    <a href="{{ route('posts.show', $post['id'])}}" class="card-footer-item has-text-primary-dark">View</a>
                    <a href="{{ route('posts.edit', $post['id'])}}" class="card-footer-item">Edit</a>
                    <a href="#" class="card-footer-item has-text-danger">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <input class="card-footer-item has-text-danger" href="#" type="submit" value="Delete">
                        </form>
                    </a>
                </footer>
            </div>
        @endforeach
    </div>
@endsection