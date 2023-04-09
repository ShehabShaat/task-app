<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
class TaskController extends Controller
{
    //

    public function index()
    {
        # code...
        // $tasks = DB::table('tasks')->get();
        // $task = new Task;
        $tasks = Task::all();
        //ببعت الداتا للفيو من خلال الكومباكت
        return view('tasks', compact('tasks'));
    }


    public function store(Request $request)
    {
             //debug
        //dd($request);
        // $task = new Task;
        // $task->name = $request->name;
        // $task->save;

        // # code...
        // DB::table('tasks')->insert([
        //     'name' => $request->name,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        Task::create([
            'name' => $request->name
        ]); 

        return redirect()->back();
    }




    public function delete($id)
    {
        // DB::table('tasks')->where('id', $id)->delete();

        // $task = Task::where('id', $id)->get();

        //لما بدي احذف فقط بدون ما استخدم اي شروطبعطيه ال id

           $task = Task::find($id);

           $task->delete();

        return redirect()->back();
    }
}
