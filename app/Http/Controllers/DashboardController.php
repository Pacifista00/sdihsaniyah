<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function jumbotron()
    {
        return view('dashboard.jumbotron', [
            'jumbotrons' => Jumbotron::latest()->get(),
            'active' => 'jumbotron'
        ]);
    }
}
