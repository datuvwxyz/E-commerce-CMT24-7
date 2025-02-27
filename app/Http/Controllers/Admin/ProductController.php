<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return view('admin.product.listProduct');
    }

    public function addProduct()
    {
        return view('admin.product.addProduct');
    }

    public function editProduct()
    {

    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }
}
