<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Throwable;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @param  string  $id
     */
    public function index($id)
    {

        $project = Project::find($id);

        $TaskList = Task::where('project_id',  $id)->get();

        return(view('task', compact('TaskList', 'project')));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {


        $project_id = $id;

        $project = Project::find($id);

        // dd($project);

        return(view('createTask', compact('project_id', 'project')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $addTask = new Task;
        $addTask->project_id = $request->project_id;
        $addTask->task = $request->task;
        $addTask->save();

        return redirect()->action(
            [TaskController::class, 'index'],
            ['id'=> $addTask->project_id]

        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task, $id)
    {
        $task = Task::find($id);
        return(view('editTask', compact('task')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task, $id)
    {
        $task = Task::find($id);
        $task->task = $request->task;
        $task->save();
        return(view('task'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task, $id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
