<?php

namespace App\Http\Controllers;

use App\Models\Perfiles;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = Perfiles::all();

        return response()->json(['perfiles'=>$perfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'nombre' => 'required', 
            ]);
    
            Perfiles::create([
                'perf_nomb' => $request->nombre,
                'perf_estado' => 1,
            ]);
    
            return response()->json(['message'=>'Ok']);
        }catch(Exception $e){
            return response()->json(['error'=>$e]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    public function suspender(Request $request)
    {
        try{
            $perfil = Perfiles::FindorFail($request->id);
            
            $perfil->perf_estado = 9;
            
            $perfil->save();
            
            return response()->json(['message' => 'Ok']);
        }catch(Exception $e){
            return response()->json(['error' => $e]);
        }
    }
}
