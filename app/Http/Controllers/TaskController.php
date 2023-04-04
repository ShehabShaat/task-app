<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    //

    public function index()
    {
        # code...
        $tasks = DB::table('tasks')->get();
        // $task = new Task;
//ببعت الداتا للفيو من خلال الكومباكت
        return view('tasks' , compact('tasks'));
    }


    public function store(Request $request)
    {
        # code...
         DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back();
    }




    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();

        // $task = Task::where('id', $id)->get();

        //لما بدي احذف فقط بدون ما استخدم اي شروطبعطيه ال id
        //$task = Task::find($id) -> get();

        return redirect()->back();
    }

    
}
