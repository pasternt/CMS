@extends('install.layout')

@section('content')
    <h3>Danke, {{\Illuminate\Support\Facades\Auth::user()->username}}</h3>
    <hr>
    <p>Danke das du uns vertraust, wir sind sicher, dass wir dein Vertrauen nicht missbrauchen werden.</p>
    <h4>Wir sind fertig!</h4>
    <p>Und du kannst nun deine Seite bearbeiten.</p>
    <p>&Ouml;ffne dazu einfach das <a href="{{URL::to('admin')}}">AdminCP</a> und es kann losgehen. </p>

@stop