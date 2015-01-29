<h1>Add new task</h1>

{{ Form::open(array('url'=>'tasks/create')) }}

{{ Form::token() }}

<p>
	{{ Form::label('name', 'Name:') }} <br/>
	{{ Form::text('name') }}
</p>

<p>
	{{ Form::label('description', 'Description:') }} <br/>
	{{ Form::textarea('description') }}
</p>

<p> {{ Form::submit('Add new task') }}</p>

{{ Form::close() }}