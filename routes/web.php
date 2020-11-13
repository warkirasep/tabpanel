<?php

use App\Http\Controllers\AccordionController;
use App\Http\Controllers\TabPaneController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TabPaneController::class, 'index']);
Route::get('/panel', [TabPaneController::class, 'panel']);
Route::get('/accordion', [AccordionController::class, 'accordion']);
Route::get('/accordion-active', [AccordionController::class, 'accordionActive']);

