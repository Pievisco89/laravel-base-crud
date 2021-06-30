@extends('layouts.main')

@section('content')

  <div class="container">

    <h1 class="mt-1">Modifica:  
      <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
    </h1>

    <form action=" {{ route('comics.update', $comic->id) }} " method="post">
      
      @csrf
      @method('PATCH')

      <div class="mt-2">
        <label for="title" class="form_label mb-2">Comic name:</label>
        <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
      </div>

      <div class="mt-2">
        <label for="description" class="form_label mb-2">Description:</label>
        <textarea name="description" id="description" class="form-control" rows="7">{{ $comic->description }}</textarea>
      </div>
      
      <div class="mt-2">
        <label for="image" class="form_label mb-2">Image:</label>
        <input type="text" id="image" name="image" class="form-control" value="{{ $comic->image }}">
      </div>

      <div class="mt-5 mb-3">
        
        <label for="type" class="form_label mb-2">Type:</label>
        <input type="text" id="type" name="type" value="{{ $comic->type }}">
        
        <label for="series" class="form_label ms-5">Series:</label>
        <input type="text" id="series" name="series" value="{{ $comic->series }}">

        <label for="sale_date" class="form_label ms-5">Sale date:</label>
        <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">

        <label for="price" class="form_label ms-5">Price:</label>
        <input type="text" id="price" name="price" value=" {{ $comic->price }}">

      </div>

      <div class="d-flex justify-content-between">
        <a href=" {{ route('comics.index') }} "><< Back</a>
        <button type="submit" class="btn btn-primary">Enter</button>
      </div>
  
    </form>
    
  </div>

@endsection