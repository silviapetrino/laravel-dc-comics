@extends('layout.main')


@section('content')

{{-- index pagina principale  --}}

<table class="table comic">
    <div class="d-flex justify-content-between align-items-center bg-black p-3">
        <h1 class="text-white fw-bolder">Comics list:</h1>
        @include('layout.partials.createComicBtn')
    </div>
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row w-100">
                    <h5 class="fw-bold">{{ $comic->title }}</h5>
                    <div class="image">
                        <img src="{{ $comic->thumb }}" class="w-100 h-100 object-fit-cover">
                    </div>
                </th>
                <td>{{ $comic->description }}</td>
                <td>
                    @include('layout.partials.showComicBtn')

                    @include('layout.partials.deleteComicBtn')
                    
                    @include('layout.partials.editComicBtn')
                </td>
            </tr>
        @endforeach


    </tbody>
  </table>


@endsection
