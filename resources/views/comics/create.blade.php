@extends('layout.main')


@section('content')


<form action="{{ route('comics.store')}}" method="POST" class="comic bg-danger p-4 m-5 text-white fw-bold rounded">

    @csrf

    <h3 class="fw-bold py-2">Add a new comic:</h3>
    @include('layout.partials.comicForm')
  </form>

@endsection
