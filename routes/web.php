<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlotInformationController;
use App\Http\Controllers\SlotGameDataController;

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

Route::get('/', [SlotInformationController::class, 'index'])
    ->name('index');

Route::get('/slot/{id}', [SlotGameDataController::class, 'show'])
    ->name('slot.show')->where('id', '[0-9]+');

Route::get('/slot/detail/{id}', [SlotGameDataController::class, 'detail'])
    ->name('slot.detail');



