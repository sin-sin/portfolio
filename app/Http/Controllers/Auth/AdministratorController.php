<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    
    public function checkAuthAdministrator()
    {
        return view('wizard-book-room');
    }
}
