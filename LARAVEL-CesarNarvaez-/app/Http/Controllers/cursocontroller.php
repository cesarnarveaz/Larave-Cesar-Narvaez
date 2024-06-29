<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class cursocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $course = Curso::all();
       //return $course;
        return view('cursos.index', compact('course'));
    }


    public function create()
    {
        //
        return view("cursos.create");
    }


    public function store(Request $request)
    {
        //return $request->input('nombrecurso');
        $course = new Curso();
        $course->nombre = $request->input('nombre');
        $course->descripcion = $request->input('descripcion');

        $course->save();
        return 'Guardado con exito';

    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
