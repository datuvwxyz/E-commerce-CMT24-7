<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategory()
    {
        return view('admin.category.listCategory');
    }
    public function addCategory()
    {
        return view('admin.category.addCategory');   
    }

    public function editCategory()
    {

    }

    public function updateCategory()
    {

    }

    public function deleteCategory()
    {

    }
}
