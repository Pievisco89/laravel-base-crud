@extends('layouts.main')

@section('content')
  
  <div class="container">
    
    <section class="title text-center m-5">
      
      <h1> {{ $comic->title }} </h1>

    </section>

    <section class="card">
      <div class="row g-0">
        <div class="col-md-4 mt-2 text-center">
          <img src=" {{ $comic->image }} " class="img-fluid rounded" alt="{{ $comic->title }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">{{ $comic->title }}</h4>
            <p class="card-text">Description: {{ $comic->description }}</p>
            <p class="card-text">Type: {{ $comic->type }}</p>
            <p class="card-text">Price: {{ $comic->price }}$</p>
            <p class="card-text"><small class="text-muted">Sale date: {{ $comic->sale_date }}</small></p>
            <a href=" {{ route('comics.index') }} "><< Back</a>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection