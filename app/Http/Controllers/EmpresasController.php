<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresas::all();
        return response()->json(['empresas' => $empresas]);
    }

    public function idDisponible(Request $request) {}

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
        Log::info($request);
        try {
            $request->validate([
                'empr_id' => 'required',
                'empr_social' => 'required',
                'empr_nomb' => 'required',
                'empr_abrev' => 'required',
                'empr_ruc' => 'required',
                'empr_tipo' => 'required',
                'empr_ubic' => 'required',
                'empr_direcc' => 'required',
                'empr_telf' => 'required',
            ]);

            Empresas::create([
                'empr_id' => $request->empr_id,
                'empr_social' => $request->empr_social,
                'empr_nomb' => $request->empr_nomb,
                'empr_abrev' => $request->empr_abrev,
                'empr_ruc' => $request->empr_ruc,
                'empr_tipo' => $request->empr_tipo,
                'empr_ubic' => $request->empr_ubic,
                'empr_direcc' => $request->empr_direcc,
                'empr_telf' => $request->empr_telf,
                'empr_seriedoc' => $request->empr_seriedoc,
                'empr_grupo' => $request->empr_grupo,
                'empr_sede' => $request->empr_sede,
                'empr_fecinvIns' => $request->empr_fecinvIns,
                'empr_correouser' => $request->empr_correouser,
                'empr_passuser' => $request->empr_passuser,
                'empr_ctabanca1' => $request->empr_ctabanca1,
                'empr_ctabanca2' => $request->empr_ctabanca2,
                'empr_ctabanca3' => $request->empr_ctabanca3,
            ]);
            
            return response()->json(['message' => 'Ok']);
        } catch (Exception $e) {
            Log::info($e);
            return response()->json(['error' => $e]);
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
}
