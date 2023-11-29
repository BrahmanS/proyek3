<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{

    public function create()
    {
        return view('add');
    }

    public function edit($kodeBarang)
    {
        $barang = Barang::findOrFail($kodeBarang);
        return view('edit', compact('barang'));
    }

    public function index()
    {
        $barangs = Barang::all();
        //return response()->json($barangs);
        return view('index', compact('barangs'));
    }

    public function show($kodeBarang)
    {
        $barang = Barang::find($kodeBarang);
        
        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        return view('show', compact('barang'));
    }

    public function store(BarangRequest $request)
    {
        $barang = Barang::create($request->validated());

        return response()->json($barang, 201);
    }

    public function update(BarangRequest $request, $kodeBarang)
    {
        $barang = Barang::find($kodeBarang);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        $barang->update($request->validated());

        return response()->json($barang);
        //return view('index', compact('barangs'));
    

    }


    public function destroy($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Barang deleted successfully']);
    }
}
