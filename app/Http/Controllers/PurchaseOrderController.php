<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PurchaseOrderController extends Controller
{
    public function index()
    {
       return view('purchase_order.orderCreation');
    }


}
