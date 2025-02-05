<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
    public function addAlumno(){
        
        $a = new Alumno();
        $dni = "7894244F";
        $nombre = "Ashito Aoi";
        $media = 7.625;
        $equipo_id = 1;
        

        $a->dni = $dni;
        $a->nombre = $nombre;
        $a->media = $media;
        $a->equipo_id = $equipo_id;

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
