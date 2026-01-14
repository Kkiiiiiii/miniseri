<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
    // $validated = $request->validate([
    //     'nama_sineas' => 'required|string|max:255',
    //     'email' => 'required|email|unique:users,email',
    //     'no_hp' => 'required|string',
    //     'ketersediaan' => 'required|in:ya,tidak',
    // ]);

    // $page = Page::create([
    //     'nama_sineas' => $validated['nama_sineas'],
    //     'email' => $validated['email'],
    //     'no_hp' => $validated['no_hp'],
    //     'ketersediaan' => $validated['ketersediaan'],
    // ]);

    // Mail::to($validated['email'])->send(
    //     new WelcomeMail([
    //         'nama' => $validated['nama_sineas'],
    //         'email' => $validated['email'],
    //         'no_hp' => $validated['no_hp'],
    //         'ketersediaan' => $validated['ketersediaan'],
    //     ])
    // );

    // return redirect()->back()->with('success', 'Pendaftaran sineas berhasil!');


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
}
