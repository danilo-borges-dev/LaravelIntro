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

    public function update($id)
    {
        $input = [
            'name' => 'Jhon 2',
            'email' => 'jhon2@hotmail.com',
            'address' => 'Rua D quadrda E'
        ];
        $business = Business::find($id);
        $business->fill($input);
        $business->save();
        dd($business);
    }
}
