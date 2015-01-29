
<h1>Tasks Home Page </h1>

	@if(Session::has('message'))
		<p style="color:green;"> {{ Session::get('message') }} </p>
	@endif
	<ul>
		@foreach($tasks as $task)
			<li> {{ HTML::linkRoute('task', $task->name, array($task->id)) }}</li>
		@endforeach
	</ul>

	<p> {{ HTML::linkRoute('new_task', 'New Task')}}</p>