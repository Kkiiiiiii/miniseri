<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view: 'home');
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'nama_sineas' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'no_hp' => 'required|string',
        'ketersediaan' => 'required|in:ya,tidak',
        'g-recaptcha-response' => 'required',
    ]);

    $response = Http::asForm()->post(
        'https://www.google.com/recaptcha/api/siteverify',
        [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
        ]
    );

    if (!$response->json('success')) {
        return back()->withErrors(['captcha' => 'Captcha salah'])->withInput();
    }

    $page = Page::create([
        'nama_sineas' => $validated['nama_sineas'],
        'email' => $validated['email'],
        'no_hp' => $validated['no_hp'],
        'ketersediaan' => $validated['ketersediaan'],
    ]);

    Mail::to($validated['email'])->send(
        new WelcomeMail([
            'nama' => $validated['nama_sineas'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp'],
            'ketersediaan' => $validated['ketersediaan'],
        ])
    );

    return redirect()->back()->with('success', 'Pendaftaran sineas berhasil!');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function show()
    {
        return view('management.index');
    }

    public function sinea()
    {
        $sinea = Page::all();
        return view('management.pendaftaran', compact('sinea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    public function delete($id)
    {
        Page::find($id)->delete();
        return redirect()->back()->with('success', 'Data Pendaftaran dihapus');
    }
}
