<?php

class Tasks extends BaseController {

	//public $restful = true;

	public function index(){
		return View::make('tasks.index')
		       ->with('title', 'Tasks')
		       ->with('tasks', Task::all());
	}

	public function view($id){
		return View::make('tasks.view')
				->with('title', 'Task details page')
				->with('task', Task::find($id));
	}

	public function newtask(){
		return View::make('tasks.new')
				->with('title', 'Add new task');
	}

	public function create(){
		Task::create(array(
			'name'=>Input::get('name'),
			'description'=>Input::get('description')
			));
		return Redirect::to('tasks')
				->with('message', 'Task was created successfully');
	}

	public function edit($id){
		return View::make('tasks.edit')
				->with('title', 'edit task')
				->with('task', Task::find($id));
	}

	public function update(){
		$id = Input::get('id');
		$task = Task::find($id);

		$task->name = Input::get('name');
		$task->description = Input::get('description');

		$task->save();

		/*Task::update($id, array(
			'name'=> Input::get('name'),
			'description'=> Input::get('description')
			));*/
		return Redirect::route('task', array($id))
				->with('message', 'task updated successfully!');
	}

	public function destroy(){
		Task::find(Input::get('id'))->delete();
		return Redirect::to('tasks')
				->with('message', 'task was deleted successfully!');
	}
}