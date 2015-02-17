<?php

class PageController extends BaseController {
    /*
     *
     *  Controller für Seitenverwaltung
     *
     */


    public function Index(){
        return \Illuminate\Support\Facades\View::make('index');
    }
}
