@extends('layouts.main')

@section('content')
  
  <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
    <h1>Errore 404</h1>
    <p> {{ $exception->getMessage() }} </p>
  </div>

@endsection