<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NakamaController extends Controller
{
    public function nakama() {
        $users = User::all();
        return view ('nakama', compact('users'));
    }
}
