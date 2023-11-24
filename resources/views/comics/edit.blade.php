@extends('layout.main')

@section('content')


<form action="{{ route('comics.update', $comic)}}" method="POST" class="comic bg-danger p-4 m-5 text-white fw-bold rounded">
    @csrf

    @method('PUT')

    <h3 class="fw-bold py-2">Edit comic's informations:</h3>
    @include('layout.partials.comicForm')
  </form>

@endsection
