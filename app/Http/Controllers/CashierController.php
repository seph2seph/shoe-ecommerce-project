<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CashierController extends Controller
{
    public function index()
    {

        // This method will return the admin dashboard view
        return view('cashier.index');
    }
}
