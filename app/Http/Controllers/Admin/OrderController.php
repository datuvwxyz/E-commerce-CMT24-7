<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder()
    {
        return view('admin.order.listOrder');
    }

    public function addOrder()
    {
        return view('admin.order.addOrder');
    }

    public function editOrder()
    {

    }

    public function updateOrder()
    {

    }

    public function deleteOrder()
    {

    }
}
