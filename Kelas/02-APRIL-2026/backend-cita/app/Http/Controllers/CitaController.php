<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller
{
    public function store(Request $request)
    {
        $cita = Cita::create([
            'nama' => $request->nama,
            'cita_cita' => $request->cita_cita
        ]);

        return response()->json([
            "message" => "Data berhasil disimpan",
            "data" => $cita
        ]);
    }

    public function update(Request $request, $id)
    {
        $cita = Cita::find($id);

        $cita->update([
            'nama' => $request->nama,
            'cita_cita' => $request->cita_cita
        ]);

        return response()->json([
            "message" => "Data berhasil diupdate",
            "data" => $cita
        ]);
    }

    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        return response()->json([
            "message" => "Data berhasil dihapus"
        ]);
    }

    public function index()
    {
        return response()->json(Cita::all());
    }
}