<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Preference;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Permission;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

