<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::paginate(5);
        return response()->json([
            'data' => $barang
        ]);
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
        $barang = barang::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);
        return response()->json([
            'data' => $barang
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        return response()->json([
            'data' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return response()->json([
            'data' => $barang
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
        return response()->json([
            'message' => 'barang dihapus'
        ],204);
    }
}
