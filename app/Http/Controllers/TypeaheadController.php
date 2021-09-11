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
}
