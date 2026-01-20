<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Gambar;
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
        $data['gambar'] = Gambar::all();
        return view( 'home', $data );
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

    public function sinea()
    {
        $sinea = Page::all();
        return view('management.pendaftaran', compact('sinea'));
    }

     public function update(Request $request, $id)
    {
        $sinea = Page::find($id);

        $request->validate([
            'nama_sineas' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'no_hp' => 'required|string',
            'ketersediaan' => 'required|in:ya,tidak',
        ]);

        $sinea->nama_sineas = $request->nama_sineas;
        $sinea->email = $request->email;
        $sinea->no_hp = $request->no_hp;
        $sinea->ketersediaan = $request->ketersediaan;

        $sinea->update();

        Mail::to($sinea['email'])->send(
        new WelcomeMail([
            'nama' => $sinea['nama_sineas'],
            'email' => $sinea['email'],
            'no_hp' => $sinea['no_hp'],
            'ketersediaan' => $sinea['ketersediaan'],
        ])
    );

        return redirect()->back()->with('success', 'Data Pendaftaran Berhasil Diupdate');

    }

    public function delete($id)
    {
        Page::find($id)->delete();
        return redirect()->back()->with('success', 'Data Pendaftaran dihapus');
    }
}
