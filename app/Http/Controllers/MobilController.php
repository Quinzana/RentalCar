<?php

namespace App\Http\Controllers;

use App\Models\MobilModel;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $role = 0;
        $mobil = MobilModel::all();
        return view('user.home', ['mobilList' => $mobil, 'role' => $role]);
    }
}
