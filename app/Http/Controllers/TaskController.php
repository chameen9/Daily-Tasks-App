<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        
        $task = new Task;

        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);

        $task->task=$request->task;
        $task->save();

        $data=Task::all();

        return redirect()->back();
        //return view('tasks')->with('tasks',$data);
        //dd($data);
    }

    public function updatetaskascompleted($id){
        $task=Task::find($id);
        $task->isCompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function updatetaskasnotcompleted($id){
        $task=Task::find($id);
        $task->isCompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function deletetask($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updatetaskview($id){
        $task=Task::find($id);
        return view('updatetask')->with('taskdata',$task);
    }

    public function updatetasktext(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);

        $data->task=$task;
        $data->save();

        $datas=Task::all();

        
        return view('updatesuccsess');
        //return view('tasks');
        //return redirect()->back();
        //return redirect()->back();
        //return redirect()->back();
        //dd($request);
    }
}
