<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(): Response
    {
        return response(view("/customer/index"));
    }
}
