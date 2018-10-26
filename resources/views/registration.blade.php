@extends('layouts.app')

@section('content')
  <h1>Rejestracja</h1>
    {!! Form::open(['url' => 'registration/submit']) !!}
      <div class="form-group">
        {{Form::label('name', 'Imię i nazwisko')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Podaj imię i nazwisko'])}}
      </div>
      <div class="form-group">
        {{Form::label('email', 'Adres email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Podaj email'])}}
      </div>
      <div class="form-group">
        {{Form::label('partner', 'Imię i nazwisko Twojego partnera')}}
        {{Form::text('partner', '', ['class' => 'form-control', 'placeholder' => 'Podaj imię i nazwisko osoby z którą się zapisujesz'])}}
      </div>
      <div class="form-group">
        {{Form::label('role', 'Twoja rola w parze')}}
        <div>
          {{Form::radio('role', 'Follower', false)}}
          {{Form::label('role', 'Follower')}}
        </div>
        <div>
          {{Form::radio('role', 'Leader', false)}}
          {{Form::label('role', 'Leader')}}
        </div>
      </div>
      <div class="form-group">
        {{Form::label('group', 'Rodzaj zajęć')}}
        <div>
          {{Form::radio('group', 'Solo', false)}}
          {{Form::label('group', 'Solo Jazz')}}
        </div>
        <div>
          {{Form::radio('group', 'Lindy', false)}}
          {{Form::label('group', 'Lindy Hop')}}
        </div>
        <div>
          {{Form::radio('group', 'Shag', false)}}
          {{Form::label('group', 'Shag')}}
        </div>
      </div>
      <div class="form-group">
        {{Form::label('message', 'Czy masz jakieś uwagi?')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
      </div>
      <div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
      </div>
    {!! Form::close() !!}
@endsection
