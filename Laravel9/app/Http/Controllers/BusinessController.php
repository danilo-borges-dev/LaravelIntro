<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::create([
            'name' => 'Jhon Snow',
            'email' => 'jhon@gmail.com',
            'address' => 'Rua a quadra b'
        ]);

        dd($business);
    }
}
