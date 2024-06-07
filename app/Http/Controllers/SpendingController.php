<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;
class SpendingController extends Controller
{
    function index()
    {
        $allSpendings = Spending::latest()->paginate(3);
        $totalSum = Spending::sum('cost');

        return view('welcome', compact('allSpendings', 'totalSum'));
    }

    function store(Request $request)
    {
        $spending = new Spending;
        $request->validate([
           'cost' => 'required|numeric',
           'name' => 'required',
            'category' => 'required'
        ]);

        $spending->fill([
           'name' =>  $request->name,
           'cost' =>  $request->cost,
           'category' =>  $request->category,
        ]);
        $spending->save();


       return redirect('/');
    }

    function costSort(Request $request)
    {
        $sortBy = $request->id;

        if ($sortBy == "asc") {
            $allSpendings = Spending::latest()->paginate(5)->SortBy('cost');
        } else if ($sortBy == "desc") {
            $allSpendings = Spending::latest()->paginate(5)->SortByDesc('cost');
        } else {
            // Handle the case where $sortBy is not "asc" or "desc"
            // You might want to return an error or default sorting
            $allSpendings = Spending::latest()->paginate(3);
        }
        $totalSum = Spending::sum('cost');

        return view('welcome', compact('allSpendings', 'totalSum'));
    }

    function delete(Request $request)
    {
        $spending = Spending::find($request->id);
        $spending->delete();
        return redirect('/');
    }

    function search(Request $request)
    {
        $allSpendings = Spending::where('name', 'like', '%' . $request->search . '%')->get();
        $totalSum = 1337;

        return view('welcome', compact('allSpendings', 'totalSum'));
    }
}
