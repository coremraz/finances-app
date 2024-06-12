<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;
class SpendingController extends Controller
{
    function index()
    {
        $allSpendings = Spending::latest()->paginate(3);
        $totalSum = Spending::totalSum();
        $todaySpendings = Spending::todaySpendings();

        return view('welcome', compact('allSpendings', 'totalSum', 'todaySpendings'));
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
           'name' =>  $this->mb_ucfirst($request->name),
           'cost' =>  $request->cost,
           'category' =>  $request->category,
        ]);
        $spending->save();


       return redirect('/');
    }

    function sort(Request $request)
    {
        $sortBy = $request->filter;

        if ($sortBy == "asc") {
            $allSpendings = Spending::latest()->paginate(5)->SortBy('cost');
        } else if ($sortBy == "desc") {
            $allSpendings = Spending::latest()->paginate(5)->SortByDesc('cost');
        } else if ($sortBy == "dateAsc") {
            $allSpendings = Spending::latest()->paginate(5)->SortBy('created_at');
        } else if ($sortBy == "dateDesc") {
            $allSpendings = Spending::latest()->paginate(5)->SortByDesc('created_at');
        } else {
            // Handle the case where $sortBy is not "asc" or "desc"
            // You might want to return an error or default sorting
            $allSpendings = Spending::latest()->paginate(3);
        }
        $totalSum = Spending::sum('cost');

        return view('welcome', compact('allSpendings', 'totalSum'));
    }

    function delete(Spending $spending)
    {
        $spending->delete();
        return redirect('/');
    }

    function search(Request $request)
    {
        //победить sqlite не удалось, никакие способы поиска без учета регистра не работают
        $allSpendings = Spending::where('name', 'like', '%'. $this->mb_ucfirst($request->by) . "%")->get();
        $totalSum = 1337;

        return view('welcome', compact('allSpendings', 'totalSum'));
    }

    private  function mb_ucfirst($string) {
        /**
         * Мультибайтовый аналог ucfirst
         * @param  string Строка в мультибайтовой кодировке
         * @return string Строка с первым символом, переведенным в верхний регистр
         */

        $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
        return $string;
    }
}
