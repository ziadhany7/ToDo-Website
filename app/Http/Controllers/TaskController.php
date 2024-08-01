<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $TasksFromDB=Task::all();
        return view('tasks.index',['tasks'=>$TasksFromDB]);
    }

    public function show(Task $task){

        return view('tasks.show',[ 'task'=>$task ]);
    }

    public function create(){
        return view('tasks.create');
    }
    public function store(){
        request()->validate([
            'title'=>['required', 'min:3'],
            'description'=>['required','min:5']
        ]);
        // $data=request()->all();
        $title=request()->title;
        $description=request()->description;   
        Task::create([
            'title'=>$title,
            'description'=>$description,

        ]);
        return to_route(route: 'tasks.index');
    }
    public function edit(Task $task){
        return view('tasks.edit',['task' => $task]);
    }
    public function update($taskId){

        $title = request()->title;
        $description = request()->description;

        $singleTask = Task::find($taskId);
        $singleTask -> update(
            [
                'title' => $title,
                'description' => $description,
            ]
            );
            return  to_route('tasks.show',$taskId);
    }
    public function destroy($taskId){
        $singleTask=Task::find($taskId);
        $singleTask->delete();
        return  to_route(route: 'tasks.index');

    }
}
