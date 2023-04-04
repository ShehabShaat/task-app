<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [TaskController::class, 'index']);
Route::post('/store', [TaskController::class, 'store']);  
Route::post('/delete/{id}', [TaskController::class, 'delete']);  
Route::post('update/{id}',function($id){
    $task = DB::table('tasks')->where('id',$id)->get();
    return view('task_update', compact('task'));
});

Route::post('/{id}',function($id){
    DB::table('tasks') -> where('id',$id)-> update([
        'name' => $_POST['updatedName'],
    ]);
    $tasks = DB::table('tasks')->get();

    return view('tasks', compact('tasks'));
});