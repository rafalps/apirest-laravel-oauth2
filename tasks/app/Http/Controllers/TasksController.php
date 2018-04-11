<?php

namespace Tasks\Http\Controllers;

use Illuminate\Http\Request;
use Tasks\Tasks;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::all();
        return $tasks;
    }

    public function store(Request $request){
        $task = Tasks::create($request->all());
        return $task;
    }

    public function show($id){
        $task = Tasks::find($id);
        return $task;
    }

    public function update(Request $request, $id){
        $task = $this->show($id);
        $task->fill($request->all())->save();
        return $task;
    }

    public function destroy($id){
        $task = $this->show($id);
        $task->delete();
        return $task;
    }
}
