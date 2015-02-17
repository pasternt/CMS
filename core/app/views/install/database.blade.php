@extends('install.layout')

@section('content')
    <h3>Datenbank</h3>
    <hr>
    <p>Bitte gebe die Details f&uuml;r die Datenbank an.</p>
    @if(Session::get('failed'))
        <div class="row">
            <div class="col s12">
                <div class="card red">
                    <div class="card-content white-text">
                        <span class="card-title">Verbindung fehlgeschlagen</span>
                        <p>Bitte &uuml;berpr&uuml;fe die angegebenen Daten!</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{ Form::open(array('url' => URL::to('install/database'))) }}
    <div class="row">
        <div class="input-field col s6">
            <input id="host" type="text" class="validate" name="host" required="" value="{{Input::old('host')}}">
            <label for="host">Datenbankhost (oftmals 127.0.0.1 bzw. localhost)</label>
        </div>
    </div>
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
            <input id="database" type="text" class="validate" name="database" value="{{Input::old('database')}}" required="" >
            <label for="database">Datenbank</label>
        </div>
    </div>
    <p>Wenn die Daten eingetragen sind, werden alle Tabellen importiert und du wirst zum Erstellen des Admin's weitergeleitet.
    (Das kann aber auch dauern)</p>
    <button type="submit" class="waves-effect waves-light btn">Datenbank pr&uuml;fen und speichern</a>
    {{ Form::close() }}
@stop