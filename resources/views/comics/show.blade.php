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

            <div class="buttons-group">
                {{-- go back to list  --}}
                @include('layout.partials.goBackBtn')
                    {{-- create comic  --}}
                @include('layout.partials.createComicBtn')
                    {{-- edit comic  --}}
                @include('layout.partials.editComicBtn')
                     {{-- delete comic  --}}
                @include('layout.partials.deleteComicBtn')
            </div>


        </div>
      </div>
</div>


@endsection
