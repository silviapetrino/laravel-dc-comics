@extends('layout.main')


@section('content')

{{-- index pagina principale  --}}
<div>
    <h1>Comics</h1>
</div>
<table class="table">
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
                <th scope="row">{{ $comic->title }}</th>
                <td>{{ $comic->description }}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('comics.show', $comic->id )}}">Detail</a>
                </td>
            </tr>
        @endforeach


    </tbody>
  </table>


@endsection
