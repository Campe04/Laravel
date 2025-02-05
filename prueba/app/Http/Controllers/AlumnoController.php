<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function addAlumno(){
        
        $a = new Alumno();
        $dni = "34469276G";
        $nombre = "Benito Soto";
        $media = 9.225;
        

        $a->dni = $dni;
        $a->nombre = $nombre;
        $a->media = $media;

        $a->save();
    }

    public function getAlumnos(){
        $alumnos = Alumno::all();
        $data['alumnos'] = $alumnos;
        return view('list-alumnos',$data);
    }

    public function getAlumno($id){
        $alumno = Alumno::where('id',$id)->get();
        $data['alumnos'] = $alumno;
        return view('list-alumnos', $data);
    }
}
