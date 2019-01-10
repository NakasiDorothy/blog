<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index(){

    	$tasks = Task::all();             //using the eloquent model

    	return view ('tasks.index',compact('tasks'));
    }

    public function show($id){

    	$task = Task::find($id);        //using the eloquent model	

		return view ('tasks.show', compact('task'));
    } 
}
