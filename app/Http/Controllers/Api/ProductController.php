<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index api
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'status' => 'success',
            'data' => $product,
        ], 200);
    }
}
