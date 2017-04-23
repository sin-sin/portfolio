<?php

namespace App\Http\Controllers;

use App\Sifre;
use Illuminate\Http\Request;

class SifreController extends Controller
{
    
    /**
     * SifreController constructor.
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function show()
    {
        $sifre = Sifre::all();
        
        return view('full-screen-table', compact('sifre'));
    }
}
