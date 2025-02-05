<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function addEquipo(){

        $nombre = "Equipo 3";
        $nuevo = new Equipo();
        
        $nuevo->nombre = $nombre;
        $nuevo->save();
    }

    public function getEquipos(){
        $equipos = Equipo::all();
        $data['equipos'] = $equipos;
        return view('list-equipos', $data);
    }

    public function getEquipo($id){
        $equipo = Equipo::where('id',$id)->get();
        $data['equipos'] = $equipo;
        return view('list-equipos',$data);
    }
}
