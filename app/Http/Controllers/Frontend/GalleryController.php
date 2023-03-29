<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Video;


class GalleryController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $data = compact('products');
        return view('frontend.gallery')->with($data);
    }
}
