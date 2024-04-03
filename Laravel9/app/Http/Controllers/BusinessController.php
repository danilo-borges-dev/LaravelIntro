<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        $business = Business::find(1);

        $whereBusiness = Business::where('name', 'Adams-Deckow')
            ->where('email', 'ahintz@example.com')
            ->get();

        $whereFirstBusiness = Business::where('name', 'Adams-Deckow')
            ->first();

        dd($businesses, $business, $whereBusiness, $whereFirstBusiness);
    }
}
