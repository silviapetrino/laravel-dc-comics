@extends('layout.main')

@section('content')


<form action="{{ route('comics.update', $comic)}}" method="POST" class="comic bg-danger p-4 m-5 text-white fw-bold rounded">
    @csrf

    @method('PUT')

    <h3 class="fw-bold py-2">Edit comic's informations:</h3>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{ $comic->title }}" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" value="{{ $comic->description }}" >
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Thumb</label>
        <input type="text" class="form-control" id="thumb" name="thumb" aria-describedby="emailHelp" value="{{ $comic->thumb }}" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" value="{{ $comic->price }}" >
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" aria-describedby="emailHelp" value="{{ $comic->series }}" >
    </div>
    <div class="mb-3">
        <label for="sale-date" class="form-label">Sale date</label>
        <input type="text" class="form-control" id="sale-date" name="sale_date" aria-describedby="emailHelp" value="{{ $comic->sale_date }}" >
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" value="{{ $comic->type }}" >
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Artists</label>
        <input type="text" class="form-control" id="artists" name="artists" aria-describedby="emailHelp" value="{{ $comic->artists }}" >
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Writers</label>
        <input type="text" class="form-control" id="writers" name="writers" aria-describedby="emailHelp" value="{{ $comic->writers }}" >
    </div>
    <button type="submit" class="btn btn-warning fw-bold">Save</button>
    <button type="reset" class="btn btn-secondary fw-bold">Reset</button>
          {{-- go back to list  --}}
          <span class="d-inline-block border">
              @include('layout.partials.goBackBtn')
          </span>

</form>

@endsection
