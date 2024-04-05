<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return view('dashboard');
        }

        return redirect()->route('signin'); // Redirect to the login page if not authenticated
    }
}
