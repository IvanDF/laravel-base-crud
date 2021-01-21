@extends('layouts.main-content')

@section('main-content')
<div class="container">
    @if ($errors->any())
    <div class="message is-danger">
        <div class="message-header">
            <p>Danger</p>
            <button class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <form class="mt-6" action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="field">
            <label class="label">Nome</label>
            <div class="control">
                <input name="author" class="input" type="text" placeholder="Nome utente" value="{{ old('author') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Titolo post</label>
            <div class="control">
                <input name="title" class="input" type="text" placeholder="Titolo del posy" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Testo</label>
            <div class="control">
                <textarea name="description" class="textarea" placeholder="Testo del post">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Anteprima testo</label>
            <div class="control">
                <textarea name="short_description" class="textarea" placeholder="Riassunto del testo del post">{{ old('short_description') }}</textarea>
            </div>
        </div>

        <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit" value="Create">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
        </div>
    </form>
</div>
@endsection