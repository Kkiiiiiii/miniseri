<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Gambar;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManagementController extends Controller
{
     public function index()
    {
        return view('management.index');
    }

    public function show()
    {
        $gambar = Gambar::orderBy('id','desc')->paginate(1);
        return view('management.create', compact('gambar'));
    }

    public function input(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'episode' => 'required|string',
            'rilis' => 'required|date',
            'genre' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gambar', 'public');
            $validasi['image'] = $path;
        }

        Gambar::create($validasi);

        return redirect()->back()->with('success', 'Berhasil menambah data baru');
    }

}
