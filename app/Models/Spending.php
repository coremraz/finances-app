<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Spending extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function totalSum($id)
    {
        return self::where('user_id', $id)->sum('cost');
    }


    public static function todaySpendings($id)
    {
        return self::where('user_id', $id)->whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->sum("cost");
    }
}
