<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ComputerController extends Controller
{
    public function viewBuilder()
    {
        return Inertia::render('Game/PCBuilder');
    }
}
