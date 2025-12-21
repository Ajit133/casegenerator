<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsServicesController extends Controller
{
    public function index()
    {
        return view('pages.products-services.index');
    }
}
