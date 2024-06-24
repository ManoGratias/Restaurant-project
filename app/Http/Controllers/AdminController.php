<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.main');
    }

    public function ajout(){
        return view('admin.menu_ajout');
    }

    public function liste(){
        return view('admin.menu_liste');
    }
}
