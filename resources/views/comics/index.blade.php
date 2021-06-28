@extends('layouts.main')

@section('content')

  <div class="container">
    <h1>Dc-Comics:</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          
          <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->type }}</td>
            <td>
              <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-success">SHOW</a>
            </td>
          </tr>
          
        @endforeach
        
      </tbody>
    </table>

    <section class="container mt-4">
      {{ $comics->links() }}
    </section>

  </div>

@endsection
