<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function view()
    {
        if (Auth::check()) {
            return Inertia::render('Game/Dashboard', [
                'user' => Auth::user(),
            ]);
        }

        return Inertia::render('Welcome');
    }
}
