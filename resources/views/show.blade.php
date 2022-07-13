@extends('layouts.base')

@section('page-title')
    Treno {{$train->codice_treno}}
@endsection

@section('page-content')
    <h1>Treno {{$train->codice_treno}}</h1>
    <h2>Stazione di Partenza: {{$train->stazione_di_partenza}}</h2>
    <h2>Stazione di Arrivo: {{$train->stazione_di_arrivo}}</h2>
    <h2>Orario Partenza: {{$train->orario_partenza}}</h2>
    <h2>Orario Arrivo: {{$train->orario_arrivo}}</h2>
    <h3><a href="{{route('home')}}">Torna indietro</a></h3>
@endsection