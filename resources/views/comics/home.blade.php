@extends('layout.main')


@section('content')

{{-- index pagina principale  --}}

<table class="table comic">
    <div>
        <h1 class="text-white fw-bolder bg-black p-2 rounded-1">Comics list:</h1>
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
                    <a class="btn btn-danger fw-bold" href="{{route('comics.show', $comic->id )}}">Detail</a>
                </td>
            </tr>
        @endforeach


    </tbody>
  </table>


@endsection
