<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands(){
        $brands = Brand::all();
        return view('BrandView',compact('brands'));
    }
}
