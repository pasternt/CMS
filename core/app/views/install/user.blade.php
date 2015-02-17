@extends('install.layout')

@section('content')
    <h3>Nutzer anlegen</h3>
    <hr>
    <p>Hier kannst du jetzt deinen Nutzer anlegen.</p>
    <p>Dieser wird volle Adminrechte haben und auch der Erste sein.</p>
    {{ Form::open(array('url' => URL::to('install/user'))) }}
    <div class="row">
        <div class="input-field col s12">
            <input id="username" type="text" class="validate" name="username"value="{{Input::old('username')}}" required="" >
            <label for="username">Nutzername</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="passwort" type="password" class="validate" name="password">
            <label for="passwort">Passwort</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email" value="{{Input::old('email')}}" required="" >
            <label for="email">eMail</label>
        </div>
    </div>
    <button type="submit" class="waves-effect waves-light btn">Nutzer anlegen und Installation abschlie&szlig;en</a>
        {{ Form::close() }}
@stop