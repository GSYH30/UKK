<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index() {
        $buku = DB::table("bukus")->orderBy('stock', 'asc')->get();
        return view("rak-buku", compact('buku'));
    }

    public function rakread() {
        $buku = DB::table("bukus")->get();
        return view("rak-read", compact('buku'));
    }
    public function rakupdate() {
        $buku = DB::table("bukus")->get();
        return view("rak-update", compact('buku'));
    }
    public function rakdelete() {
        $buku = DB::table("bukus")->get();
        return view("rak-delete", compact('buku'));
    }
    public function create() {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // atur validasi sesuai kebutuhan Anda
            'penerbit' => 'required|string',
            'judul' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        Buku::create([
            'image' => $imageName,
            'penerbit' => $request->penerbit,
            'judul' => $request->judul,
            'stock' => $request->stock,
            'price' => $request->price,
        ]);

        return redirect('notif-create');
    }


    public function destroy(Buku $buku) {
        $buku->delete();
        return redirect('notif-delete');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('edit', compact(['buku']));
    }

    public function update($id, Request $request) {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // validasi gambar opsional
            'penerbit' => 'required|string',
            'judul' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);
        
        $buku = Buku::findOrFail($id); // Mencari buku berdasarkan ID
        
        // Jika terdapat file gambar yang diunggah, simpan dan update nama gambar
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $buku->image = $imageName;
        }
        
        // Update data buku yang lain
        $buku->penerbit = $request->penerbit;
        $buku->judul = $request->judul;
        $buku->stock = $request->stock;
        $buku->price = $request->price;
        
        $buku->save(); // Simpan perubahan
        
        return redirect('notif-edit');
    }

    public function search(Request $request) {
        if ($request->has('search')) {
            $buku = Buku::where('judul', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $buku = Buku::all();
        }
        return view('rak-buku',['buku'=> $buku]);
    }
}
