<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function Crear(Request $request) {
        $curso = new Curso();
        $curso -> nombreDelCurso = $request -> post("nombreDelCurso");
        $curso -> precioDelCurso = $request -> post("precioDelCurso");
        $curso -> save();
        return redirect('/curso')
          -> with('resultado', true)
          -> with('mensaje', 'Curso Creado');
    }
    public function Listar() {
        $cursos = Curso::all();
        return view("listarCursos", ["cursos" => $cursos]);
    }
    public function Eliminar(Request $request, $id) {
        $curso = Curso::find($id);
        $curso -> delete();
        return redirect("/")
          -> with('eliminado', true);
    }
    public function MostrarFormularioDeModificar(Request $request) {
        $curso = Curso::find($request -> post("id"));
        var_dump($curso);
        $curso -> nombreDelCurso = $request -> post("nombreDelCurso");
        $curso -> precioDelCurso = $request -> post("precioDelCurso");
        $curso -> save();
        return redirect("/")
          -> with('modificado', true);
    }
}