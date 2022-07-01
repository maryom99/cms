<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Hi! Welcome To Laravel';
    }

    public function about() {
        echo    "Name: Maryam Mohammed Ali Albaiti <br>";
        echo    "NIM: 2041720205 <br>";
        echo    "Class: TI-2I";
        
    }

    public function articles($id) {
        return 'This is Article Pages with ID:  '.$id;
    }

}
