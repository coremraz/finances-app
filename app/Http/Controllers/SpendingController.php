<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Spending;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SpendingController extends Controller
{
    function index()
    {
        $user = User::find(session()->get('id'));
        $userSpendings = $user->spendings()->simplePaginate(3);

        return view('welcome', compact('userSpendings'));
    }

    function store(Request $request)
    {
        $spending = new Spending;

        $request->validate([
            'cost' => 'required|numeric',
            'name' => 'required',
            'category' => 'required',
        ]);

        $spending->fill([
            'name' => $this->mb_ucfirst($request->name),
            'cost' => $request->cost,
            'category' => $request->category,
            'user_id' => session()->get('id'),
        ]);

        $spending->save();


        return redirect('/');
    }

    function edit(Spending $spending)
    {
        return view('edit', compact('spending'));
    }

    function update(Request $request)
    {
        $spending = Spending::find($request->id);

        $request->validate([
            'cost' => 'required|numeric',
            'name' => 'required',
            'category' => 'required',
        ]);

        $spending->fill([
            'name' => $this->mb_ucfirst($request->name),
            'cost' => $request->cost,
            'category' => $request->category,
            'user_id' => session()->get('id'),
        ]);

        $spending->save();

        return redirect("/");
    }

    function delete(Spending $spending)
    {
        $spending->delete();
        return redirect('/');
    }

    function search(Request $request)
    {
        //победить sqlite не удалось, никакие способы поиска без учета регистра не работают
        $allSpendings = Spending::where('name', 'like', '%' . $this->mb_ucfirst($request->by) . "%")->get();

        return view('welcome', compact('allSpendings'));
    }

    function sort(Request $request)
    {
        $sortBy = $request->filter;
        $user = User::find(session()->get('id'));

        if ($request->startDate && $request->endDate) {
            $userSpendings = Spending::where('created_at', '>=', $request->startDate)
                ->where('created_at', '<=', $request->endDate)
                ->simplePaginate(3);

            return view('welcome', compact('userSpendings'));
        }

        switch ($sortBy) {
            case "asc":
                $userSpendings = $user->spendings()->orderBy('cost', 'asc')->simplePaginate(3);
                break;
            case "desc":
                $userSpendings = $user->spendings()->orderBy('cost', 'desc')->simplePaginate(3);
                break;
            case "dateAsc":
                $userSpendings = $user->spendings()->orderBy('created_at', 'asc')->simplePaginate(3);
                break;
            case "dateDesc":
                $userSpendings = $user->spendings()->orderBy('created_at', 'desc')->simplePaginate(3);
                break;
            default:
                $userSpendings = $user->spendings()->simplePaginate(3);
                break;
        }

        return view('welcome', compact('userSpendings'));
    }
    private function mb_ucfirst($string)
    {
        /**
         * Мультибайтовый аналог ucfirst
         * @param string Строка в мультибайтовой кодировке
         * @return string Строка с первым символом, переведенным в верхний регистр
         */

        $string = mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
        return $string;
    }
}
