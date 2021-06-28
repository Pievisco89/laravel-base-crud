@extends('layouts.main')

@section('content')

  <div class="container">

    <h1 class="mt-2">New Comic:</h1>

    <form action=" {{ route('comics.store') }} ">
      
      @csrf
      @method('POST')

      <div class="mt-3">
        <label for="title" class="form_label mb-2">Comic name:</label>
        <input type="text" id="title" name="title" class="form-control">
      </div>

      <div class="mt-3">
        <label for="description" class="form_label mb-2">Description:</label>
        <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
      </div>
      
      <div class="mt-3">
        <label for="image" class="form_label mb-2">Image:</label>
        <input type="text" id="image" name="image" class="form-control">
      </div>

      <div class="mt-3">
        <label for="type" class="form_label mb-2">Type:</label>
        <select name="type" id="type">
          <option value="comic book">Comic Book</option>
          <option value="graphic novel">Graphic Novel</option>
        </select>
      </div>
  
    </form>
    
  </div>

@endsection