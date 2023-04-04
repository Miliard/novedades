
@extends('tema.app')

@section('title', "Listados de tareas")
    
@section('contenido')

    <h3>
        Listados de tareas
    </h3>
  @livewire('tarea-index')
@endsection