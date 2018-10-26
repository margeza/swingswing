@extends('layouts.app')

@section('content')
  <h1>Rejestracje</h1>
  @if(count($registration)>0)
    @foreach($registration as $reg)
      <ul class="list-group">
        <li class="list-group-item">Imię i nazwisko: {{$reg->name}}</li>
        <li class="list-group-item">Email: {{$reg->email}}</li>
        <li class="list-group-item">Partner: {{$reg->partner}}</li>
        <li class="list-group-item">Rola: {{$reg->role}}</li>
        <li class="list-group-item">Grupa: {{$reg->group}}</li>
        <li class="list-group-item">Wiadomość: {{$reg->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection
