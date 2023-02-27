<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class appController extends Controller
{
    public function show()
    {
        return Inertia::render('home');
    }
    public function rpl()
    {
        $data="halo ini dari backend";
        return Inertia::render('about',[
            'datas'=>$data
        ]);
    }
}
