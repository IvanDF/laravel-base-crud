@extends('layouts.main-content')

@section('main-content')
    <ul>
        @foreach ($posts as $post)
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        {{$post['title']}}
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                    <span class="icon">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                    </a>
                </header>
                <div class="card-content">
                    <div class="content">
                        {{$post['description']}}
                    <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">{{$post['author']}}</time>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item">Save</a>
                    <a href="#" class="card-footer-item">Edit</a>
                    <a href="#" class="card-footer-item">Delete</a>
                </footer>
            </div>
        @endforeach
    </ul>
@endsection