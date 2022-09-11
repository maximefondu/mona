<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("pages.customer.index");
    }
}
