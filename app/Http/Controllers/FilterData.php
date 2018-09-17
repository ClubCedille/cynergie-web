<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counter;

class FilterData extends Controller
{
    public function __invoke(Request $request)
    {
        $counters = Counter::where('place', 'like', $request->get("filter") . '%')
            ->get();

        return $counters;
    }
}
