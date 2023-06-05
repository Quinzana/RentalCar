<?php

namespace App\Http\Controllers;

use App\Models\MobilModel;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $role = 5;
        $mobil = MobilModel::all();
        return view('user.home', ['mobilList' => $mobil, 'role' => $role]);
    }

    public function show($id_mobil)
    {
        $role = 5;
        $mobil = MobilModel::find($id_mobil);
        return view('mobil.mobil-detail', ['mobilList' => $mobil, 'role' => $role]);
    }
}
