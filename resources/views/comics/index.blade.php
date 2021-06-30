@extends('layouts.main')

@section('content')

  <div class="container">
    <h1>Dc-Comics:</h1>

    @if (session('deleted'))
      <div class="alert alert-success" role="alert">
          <span> <strong>{{ session('deleted') }}</strong> eliminato correttamente</span>
      </div>
    @endif
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
          <th scope="col" colspan="3">Actions</th>
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
              <a href=" {{ route('comics.show', $comic->id) }} " class="btn btn-success me-3">SHOW</a>
            </td>
            <td>
              <a href=" {{ route('comics.edit', $comic) }} " class="btn btn-primary me-3">EDIT</a>
            </td>
            <td>
              <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETE</button>
              </form>
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
