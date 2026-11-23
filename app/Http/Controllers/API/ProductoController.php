<?php
#se tiene que mapear las librerias DE API
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
#se tiene que mapear las librerias DE API
use Illuminate\Http\JsonResponse;  #respuestas a todas las consultas de la api que se hagan
use App\Http\Resources\ProductoResource;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::orderBy('id', 'desc')->paginate(10);

        return response()->json([
            'status' => 'success',
            'data'   => ProductoResource::collection($productos),
            'pagination' => [
            'total'        => $productos->total(),
            'per_page'     => $productos->perPage(),
            'current_page' => $productos->currentPage(),
            'last_page'    => $productos->lastPage(),
            ]
        ], 200); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
