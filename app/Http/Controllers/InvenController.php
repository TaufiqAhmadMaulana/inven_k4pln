<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inven;
use Illuminate\Http\Request;

class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='inventori-k4';
        $invens=Inven::all();

        // Ambil data Categories
        $categories = Category::all();
        // @dd($categories);

        return view('manajerS.inven.inven-k4', compact('title', 'invens', 'categories'));

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
    // public function store(Request $request)
    // {
    //     //dd($request);
    //     // Validasi data
    //     //return $request->file('gambar')->store('Uploads');
        
    //     $request->validate([
    //         'kode' => 'required|string',
    //         'kategori' => 'required|in:APAR,APD,DIESEL',
    //         'nama' => 'required|string',
    //         'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
    //         'lokasi' => 'required|string',
            
    //     ]);
    //     // return $request->file('gambar')->store('uploads', 'public');
        
    //     $originalName = $request->file('gambar')->getClientOriginalName();

    //     // Ambil nama asli file gambar
    //     $originalName = $request->file('gambar')->getClientOriginalName();


    //     // Tentukan path untuk menyimpan file di folder 'public/assets/upload'
    //     $destinationPath = public_path('assets/upload');
        
    //     // Pindahkan file ke lokasi yang ditentukan
    //     $request->file('gambar')->move($destinationPath, $originalName);

    //     // Simpan path relatif di database
    //     $relativePath = 'assets/upload/' . $originalName;
    //     // $path= $request ->file('gambar') ->storeAs('uploads', $originalName, 'public');

    //     // Simpan data ke database
    //     Inven::create([
    //         'kode' => $request->kode,
    //         'kategori' => $request->kategori,
    //         'nama' => $request->nama,
    //         'gambar' => $relativePath,
    //         'lokasi' => $request->lokasi,

    //     ]);
        
    //     return redirect()->route('inven-k4.index')->with('success', 'Berhasil Input Data');
    // }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kode' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'nama' => 'required|string',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string',
        ]);
        
        // Ambil file gambar dari request
        $file = $request->file('gambar');
        $originalName = $file->getClientOriginalName();
        $uniqueName = uniqid() . '_' . $originalName; 
        $destinationPath = public_path('assets/upload');
        $file->move($destinationPath, $uniqueName);
        $relativePath = 'assets/upload/' . $uniqueName;

        // Simpan data ke database
        Inven::create([
            'kode' => $request->kode,
            'category_id' => $request->category_id,
            'nama' => $request->nama,
            'gambar' => $relativePath,
            'lokasi' => $request->lokasi,
        ]);
        
        return redirect()->route('inven-k4.index')->with('success', 'Berhasil Input Data');
    }



    /**
     * Display the specified resource.
     */
    public function show(Inven $inven)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inven $inven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inven $inven)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inven $inven)
    {
        //
    }
}
