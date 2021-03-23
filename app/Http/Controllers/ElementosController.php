<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Elementos;


class ElementosController extends Controller
{
    public function index(){
        $elementos = Elementos::all();

        return view('index', ['elementos' => $elementos]);
    }
    public function crear(Request $request) {
        Elementos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/');
    }
    public function agregar(){
        return view('agregar');
    }

    public function editar($id) {
        $elementos = Elementos::find($id);
    
        return view('editar', ['elementos' => $elementos]);
    }

    public function update(Elementos $elementos, Request $request){
        $elementos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio')
        ]);
        return redirect('/');
    }

    public function destroy($id){
        $elementos = Elementos::find($id);
        $elementos->delete();
        return redirect('/');
    }

}