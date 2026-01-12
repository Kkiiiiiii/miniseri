<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
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
        $validasi = $request->validate([
            'nama_sineas' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email',
            'no_hp' => 'required|string',
            'ketersediaan' => 'required|in:ya,tidak',
            'recaptcha_token' => 'required',
        ]);

        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('recaptcha.secret_key'),
        //     'response' => $request->recaptcha_token,
        //     'remoteip' => $request->ip(),
        // ]);

        // $result = $response->json();

        // if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
        //     return back()->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal, silakan coba lagi.']);
        // }

        Page::create($validasi);

        return redirect()->back()->with('success', 'Pendaftaran sineas berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
