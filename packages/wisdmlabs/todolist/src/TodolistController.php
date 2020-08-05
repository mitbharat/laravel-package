<?php

namespace Wisdmlabs\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Wisdmlabs\Todolist\Task;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //die('bh11');
         //return view('wisdmlabs.todolist.list');
       return redirect()->route('task.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //die('bh22');
        $tasks = Task::all();
        $submit = 'Add';
        return view('wisdmlabs.todolist.list', compact('tasks', 'submit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate(['name' => 'required|min:4']);

        $task = new Task;
        $task->setAttribute('name', $request->get('name'));
        $task->save();

        return redirect()->route('task.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //die('bh33');
        $tasks = Task::all();
        $task = Task::findOrFail($id);
        $submit = 'Update';
        return view('wisdmlabs.todolist.list', compact('tasks', 'task', 'submit'));
        //print_r($task);
        //die('bh33');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->get('name');
        $task = Task::findOrFail($id);
        $task->update(['name'=> $input]);
        return redirect()->route('task.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.create');
    }
}
