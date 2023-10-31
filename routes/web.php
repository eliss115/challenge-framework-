<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profil;

Route::get('/', [Profil::class,'index']);
