@extends('layout.main')


@section('content')

<div class="comic">
    <div class="card p-3 w-100 rounded-2" >

        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h4 class="card-title fw-bolder">{{ $comic->title}}</h4>
            <p class="card-text">
                <span>Description:</span>
                {{ $comic->description }}
            </p>
            <p class="card-text">
                <span>Price:</span>
                {{ $comic->price }}
            </p>
            <p class="card-text">
                <span>Series:</span>
                {{ $comic->series }}
            </p>
            <p class="card-text">
                <span>Sale date:</span>
                {{ $comic->sale_date }}
            </p>
            <p class="card-text">
                <span>Type:</span>
                {{ $comic->type }}
            </p>
            <p class="card-text">
                <span>Artists:</span>
                {{ $comic->artists }}
            </p>
            <p class="card-text">
                <span>Writers:</span>
                {{ $comic->writers }}
            </p>
            {{-- actions   --}}
            <a href="{{route('comics.index')}}" class="btn btn-danger">
                <i class="fa-solid fa-left-long fa-beat-fade" style="color: #ffffff;"></i>
                <span>Go back</span>
            </a>
            <a href="{{ route('comics.create') }}" class="btn btn-primary">
                <i class="fa-solid fa-plus fa-beat-fade"></i>
                <span>Add new comic</span>
            </a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success">
                <i class="fa-solid fa-pencil fa-beat-fade"></i>
                <span>Edit comic's info</span>
            </a>
        </div>
      </div>
</div>


@endsection
