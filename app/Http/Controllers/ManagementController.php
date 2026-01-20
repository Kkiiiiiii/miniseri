<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
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
        return view('management.create');
    }

    public function input(Request $request)
    {
        $validasi = $request->validate([

        ]);
    }

}
