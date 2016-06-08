{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('group_id', 'Group_id:') }}
			{{ Form::text('group_id') }}
		</li>
		<li>
			{{ Form::label('resource_id', 'Resource_id:') }}
			{{ Form::text('resource_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}