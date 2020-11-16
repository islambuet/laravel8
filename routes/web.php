<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SystemModuleTask;

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
//Route::get('/', function () {return view('layout.mytheme');});
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/sys_module_task', function ($id) {
//     return 'hi';
// })->middleware('check_task_access:editor,hi');

//Route::middleware(['check_task_access:sanctum'])->get('/sys_module_task', SystemModuleTask::class)->name('sys_module_task');

Route::get('/sys_module_task',SystemModuleTask::class)->name('sys_module_task');