<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeaheadController;

Route::get('/', [TypeaheadController::class, 'index']);
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
