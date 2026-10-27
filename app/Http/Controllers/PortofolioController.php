<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::latest()->get();
        return view('portofolio.index', compact('portofolios'));
    }

    public function admin()
{
    $portofolios = Portofolio::latest()->get();
    return view('portofolio.admin', compact('portofolios'));
}

    public function create()
    {
        return view('portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('portofolio', 'public');

        Portofolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('portofolio.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, Portofolio $portofolio)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'link' => 'nullable|url', // <-- ADD THIS
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link, // <-- ADD THIS
    ];

    if ($request->hasFile('image')) {
        if ($portofolio->image) {
            Storage::disk('public')->delete($portofolio->image);
        }
        $data['image'] = $request->file('image')->store('portofolio', 'public');
    }

    $portofolio->update($data);

    return redirect()->route('portofolio.admin')->with('success', 'Data berhasil diupdate!');
}

    public function destroy(Portofolio $portofolio)
    {
        if ($portofolio->image) {
            Storage::disk('public')->delete($portofolio->image);
        }
        $portofolio->delete();

        return redirect()->route('portofolio.index')->with('success', 'Data berhasil dihapus!');
    }
}