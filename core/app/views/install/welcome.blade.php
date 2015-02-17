@extends('install.layout')

@section('content')
    <h3>Moin Moin ;)</h3>
    <hr>
    <p>Lange nicht gesehen, oder...? Tja, das &auml;ndert sich nun!</p>
    <p>Wir sind erwachsener geworden und das CMS gleich mit. Es gibte eine komplett neue Basis - von Anfang
        professioneller und vorallem: sicherer!</p>
    <p>Auf jeden Fall sch&ouml;n das du zu uns gefunden hast. Lass uns auf die Reise gehen und die Installation
        beginnen!</p>
    <div style="text-align: center;">
        <a  class="waves-effect waves-light btn" href="{{URL::to('install/database')}}">Los geht's!</a>
    </div>
@stop