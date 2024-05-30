<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;
class SpendingController extends Controller
{
    function index()
    {
        $data = Spending::all();

        $name = $data[0]->name;
        $cost = $data[0]->cost;
        return view('welcome', compact('name', 'cost'));
    }
}
