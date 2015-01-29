@if(Session::has('message'))
		<p style="color:green;"> {{ Session::get('message') }} </p>
@endif
<h1>{{ HTML::entities($task->name) }}</h1>
<p> {{ HTML::entities($task->description) }}</p>
<p><small>{{ $task->updated_at }}</small></p>

<span> {{ HTML::linkRoute('tasks', 'Tasks') }} |
	{{ HTML::linkRoute('edit_task', 'Edit', array($task->id))}} |
	{{ Form::open(array('url' => 'task/delete', 'method' => 'DELETE')) }}
	{{ Form::token() }}
	{{ Form::hidden('id', $task->id) }}
	{{ Form::submit('Delete') }}
	{{ Form::close() }}
</span>