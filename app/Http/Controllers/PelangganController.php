<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'birthday'   => 'required|date',
            'gender'     => 'required|string',
            'email'      => 'required|email|unique:pelanggan,email',
            'phone'      => 'required|string|max:20',
        ]);

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
    }

    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'birthday'   => 'required|date',
            'gender'     => 'required|string',
            'email'      => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'phone'      => 'required|string|max:20',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Diperbarui!');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Dihapus!');
    }
}