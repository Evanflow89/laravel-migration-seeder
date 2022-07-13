@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
<h1 class="pt-3">Lista Treni in Partenza:</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Codice</th>
        <th scope="col">Stazione di Partenza</th>
        <th scope="col">Stazione di Arrivo</th>
        <th scope="col">Orario di Partenza</th>
        <th scope="col">Orario di Arrivo</th>
        <th scope="col">In Orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($trains as $train)
         <tr>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->stazione_di_partenza}}</td>
            <td>{{$train->stazione_di_arrivo}}</td>
            <td>{{$train->orario_partenza}}</td>
            <td>{{$train->orario_arrivo}}</td>
            <td>{{$train->in_orario ? "Si" : "No"}}</td>
            <td>{{$train->cancellato ? "Si" : "No"}}</td>
         </tr>
     @endforeach
    </tbody>
  </table>

@endsection