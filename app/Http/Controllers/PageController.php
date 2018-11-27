<?php

namespace App\Http\Controllers;

use \App\Models\ProductCategory;

class PageController extends Controller
{
    public function index()
    {


        return view('page.index', [

        ]);
    }
}
