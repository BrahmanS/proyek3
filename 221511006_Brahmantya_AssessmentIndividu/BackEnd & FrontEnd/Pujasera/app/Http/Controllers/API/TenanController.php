<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenan;

class TenanController extends Controller
{
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenan', compact('tenans'));
    }
}
