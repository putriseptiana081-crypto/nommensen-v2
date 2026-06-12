<?php

use App\Models\History;
use App\Models\Visimisi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $history = History::first();
    $visimisi = Visimisi::first();
    return view('home', compact('history', 'visimisi'));
});
