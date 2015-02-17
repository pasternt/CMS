@extends('install.layout')

@section('content')
    <h3>Datenbankimport</h3>
    <hr>
    <p>Der Server importiert nun jegliche Datenbanken. Dies kann je nach Serverleistung eine Weile dauern.</p>
    <p class="red-text text-accent-4">Das Fenster darf währenddessen nicht geschlossen werden!</p>
    <script type="text/javascript">
        <!--
                window.location = "{{URL::to('install/database/import')}}";
        //–>
    </script>
@stop