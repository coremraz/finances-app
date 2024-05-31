<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;
class SpendingController extends Controller
{
    function index()
    {
        $allSpendings = Spending::latest()->paginate(3);
        $allCosts = Spending::select('cost')->get();
        $totalSum = 0;

        foreach ($allCosts as $spending) {
            $totalSum += $spending->cost;
        }
        return view('welcome', compact('allSpendings', 'totalSum'));
    }

    function store(Request $request)
    {
        $spending = new Spending;

        $spending->name = $request->name;
        $spending->cost = $request->cost;

        $spending->save();
       return redirect('/');
    }
}
