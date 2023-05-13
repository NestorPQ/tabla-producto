<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $productos = DB::table('producto')
        ->select('codigoProduct', 'nombreProduct', 'marcaProduct', 'precioProduc')
        ->where('nombreProduct', 'LIKE', '%'. $texto. '%')
        ->orwhere('marcaProduct', 'LIKE', '%'. $texto. '%')
        ->orderBy('nombreProduct', 'asc')
        ->paginate(8);

        return view('producto.index', compact('productos', 'texto'));
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {

        $producto = new Producto;
        $producto->nombreProduct=$request->input('nombreProduct');
        $producto->marcaProduct=$request->input('marcaProduct');
        $producto->precioProduc=$request->input('precioProduc');

        return redirect()->route('producto.index');

    }

}

