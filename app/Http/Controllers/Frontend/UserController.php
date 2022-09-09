<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductModel;


class UserController extends Controller
{
    public function index(){

        $product = ProductModel::all();
        return view("frontend.dashboard",compact("product"));
    }
}
