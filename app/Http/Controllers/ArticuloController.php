<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    // Mostrar todos los artículos
    public function index()
    {
        $articulos = Articulo::all(); 
        return view('articulos.index', compact('articulos'));  
    }

    public function create()
    {
        return view('articulos.form');  
    }

    // Almacenar un nuevo artículo
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'serie_o_pelicula' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        Articulo::create($request->all());

        return redirect()->route('articulos.index');  
    }

    // Mostrar el formulario para editar un artículo
    public function edit($id)
    {
        $articulo = Articulo::findOrFail($id);  
        return view('articulos.form', compact('articulo'));
    }

    // Actualizar los datos de un artículo
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'serie_o_pelicula' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        $articulo = Articulo::findOrFail($id);  
        $articulo->update($request->all());

        return redirect()->route('articulos.index');
    }

    // Eliminar un artículo
    public function destroy($id)
    {
        $articulo = Articulo::findOrFail($id);  
        $articulo->delete();  

        return redirect()->route('articulos.index');  
    }
}
