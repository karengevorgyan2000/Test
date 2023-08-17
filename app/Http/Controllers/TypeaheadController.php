<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TypeaheadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function autocompleteSearch(Request $request)
    {

        $str = $request->get('search');
        $filterResult = User::where('name_en', 'LIKE', '%'. $str. '%')
                            ->orWhere('name_am', 'LIKE', '%'. $str. '%')
                            ->orWhere('name_ru', 'LIKE', '%'. $str. '%')
            ->pluck('name_en');
        return response()->json($filterResult);
    }
}
