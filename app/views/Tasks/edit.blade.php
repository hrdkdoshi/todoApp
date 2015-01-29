<h1> Editing {{ HTML::entities($task->name) }}</h1>

{{ Form::open(array('url' => 'task/update', 'method' => 'PUT')) }}	

{{ Form::token() }}

<p>
	{{ Form::label('name', 'Name:') }} <br />
	{{ Form::text('name', $task->name) }} 
</p>

<p>
	{{ Form::label('description', 'Description:') }} <br />
	{{ Form::textarea('description', $task->description) }} 
</p>

{{ Form::hidden('id', $task->id) }}

<p> {{ Form::submit('Update Task') }} </p>

{{ Form::close() }}