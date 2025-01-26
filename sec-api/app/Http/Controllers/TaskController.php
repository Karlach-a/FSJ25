<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //ontenemos todad las tareas
         $tasks= Task::all();
         /* $tasks = DB::table('tasks')
          ->select('name', 'description', 'completed')
          ->get();*/
  
          //retornamos la respuesta en formato JASON
          return response()->json([
              'data'=> $tasks
          ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //creamos una nueva tarea
        $task= Task::create($request->all());
        
        //Retornamos un mensaje y el objeto creado 

        return response()->json([
            'message'=>'Task created succesfully',
            'data'=> $task

        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Buscar la tarea por el ID
        $task= Task::findOrFail($id);

        //Actualizar la tarea
        $task->update ($request->all());

        return response()->json([
            'message'=>'Task updated successfully',
            'data' => $task
        ]);//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buscar la tarea por el ID
        $task=Task::findOrfail($id);

        //Eliminar la tarea
        $task->delete();

        return response()->json([
           'message'=> 'Task deleted succesfully'
        ]);
    }
}
