<?php

namespace App\Http\Controllers;

use ErrorException;
use App\Models\Barang;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("barang.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

          

           

            $barang = new Barang;
            $barang->nama        = $request->nama;
            $barang->deskripsi        = $request->deskripsi;
            $barang->save();

            Session::flash('success','barang Berhasil ditambah !');
            return redirect()->route('barang.index');

        }   catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
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
        $barang = barang::find($id);
        return view('backend.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

           

            $barang = Barang::find($id);
            $barang->nama        = $request->nama;
            $barang->deskripsi          = $barang->deskripsi;
            $barang->save();

            Session::flash('success','barang Berhasil diupdate !');
            return redirect()->route('barang.index');

        }   catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = barang::find($id);
        
        $barang->delete($id);
       
        Session::flash('success','barang Berhasil dihapus !');
            return redirect()->route('barang.index');
    }
   

   
}

