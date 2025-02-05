<?php

namespace App\Http\Controllers;

class HolaController extends Controller{
    public function show(){
        return view('hola2');
    }

    public function saludo($nombre){
        $data['nombre'] = $nombre;
        return view('hola',$data);
    }
}