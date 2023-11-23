@extends('layout.main')


@section('content')



<div class="card">
    <div class="card p-3" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title}}</h5>
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
        </div>
      </div>
</div>


@endsection
