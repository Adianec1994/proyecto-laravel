<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function _construct()
    {
    $this->middleware('auth');
    }

    public function index(Request $request)
        {
            return view('layout.menu');
        }



    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
