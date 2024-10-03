<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class produkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $produk = Produk::paginate(20);
        $title = 'Produk';
        return view('produk.index', compact('produk', 'title'));
    }


    public function create()
    {
        $title = 'Tambah Produk';
        $auth = Auth::user();
        return view('produk.create', compact('title', 'auth'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required|image|mimes:png,jpg,jpeg,svg|max:10024',
        ]);

        $gambar = $request->file('gambar_produk');
        $gambar->storeAs('public/storage', $gambar->hashName());

        $produk = Produk::create([
            'nama_produk' => $request->input('nama_produk'),
            'harga_produk' => $request->input('harga_produk'),
            'gambar_produk'     => $gambar->hashName(),
        ]);

        if ($produk) {
            return redirect()->route('produk.index')->with(['success' => 'data berhasil disimpan']);
        } else {
            return redirect()->route('produk.index')->with(['error' => 'data gagal disimpan']);
        }
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $title = 'Ubah Produk';
        $auth = Auth::user();
        return view('produk.edit', compact('produk', 'title', 'auth'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required|image|mimes:png,jpg,jpeg,svg|max:10024',
        ]);

        $produk = Produk::findOrFail($id);

        $gambar = $request->file('gambar_produk');
        $gambar->storeAs('public/storage', $gambar->hashName());
        Storage::delete('public/posts/' . $produk->gambar);

        $produk->update([
            'nama_produk' => $request->input('nama_produk'),
            'harga_produk' => $request->input('harga_produk'),
            'gambar_produk'     => $gambar->hashName(),
        ]);

        if ($produk) {
            return redirect()->route('produk.index')->with(['success' => 'data berhasil diubah']);
        } else {
            return redirect()->route('produk.index')->with(['error' => 'data gagal diubah']);
        }
    }

    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete('public/posts/' . $produk->gambar);
        $produk->delete();

        if ($produk) {
            return redirect()->route('produk.index')->with(['success' => 'data berhasil dihapus']);
        } else {
            return redirect()->route('produk.index')->with(['error' => 'data gagal dihapus']);
        }
    }
}
