<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $barangs = barang::latest()->paginate(5);
        return view('barangs.index',compact('barangs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required',
        ]);
        
        barang::create($request->all());

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(barang $barang) : View
    {
        return view('barangs.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang) : View
    {
        return view('barangs.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang) : RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required',
        ]);
        
        $barang->update($request->all());
        
        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang) : RedirectResponse
    {
        $barang->delete();

        return redirect()->route('barangs.index');
    }
}
