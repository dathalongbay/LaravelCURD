<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    //

    public function index() {
        $data = array();
        return view('product.index', $data);
    }
}
