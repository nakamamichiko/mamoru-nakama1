<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContController extends Controller
{
    public function test() {
        return view('test');
    }

}
