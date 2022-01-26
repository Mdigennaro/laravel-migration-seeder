@extends('layouts.main')

@section('content')

<main>
  <div class="container">
    <h1>Pacchetti viaggio</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Pacchetto</th>
          <th scope="col">Luogo</th>
          <th scope="col">N persone</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>

     @foreach ($travels as $travel)
        
      <tbody>
        <tr>
          <td>{{$travel->city}}</td>
          <td>{{$travel->state}}</td>
          <td>{{$travel->person}}</td>
          <td>{{$travel->price}}€</td>
        </tr>
      </tbody>

      @endforeach
    </table>
  </div>
</main>
  
@endsection