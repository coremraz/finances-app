<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Spending;

class SpendingComposer
{
    public function compose(View $view)
    {
        $view->with('totalSum', Spending::totalSum(session()->get('id')));
        $view->with('todaySpendings', Spending::todaySpendings());
    }
}
