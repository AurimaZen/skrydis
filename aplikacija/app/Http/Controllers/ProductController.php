<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Skrydis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public function index($id)
    {

        return view('thankyou', ['id' => $id]);

    }

    public function showThankyouStuff(Product $request, Skrydis $skrydis)
    {
        $kodas = 'ABCD' . rand(1000, 5000);
        //$kodas = '123456789';
        $skrydis = new Skrydis();
        //$product_id = Product::select('id')->where('kodas')->first();
        $skrydis->kodas = $kodas;
        $skrydis->save();
        $product = Product::all();
        return view('thankyou', ['product' => $product, 'kodas' => $kodas]);

    }

    //isspausdina visus produktus homepage
    function showProduct()
    {
        $data = Product::all();
        return view('productForm', ['product' => $data]);
    }
}
