{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('tag_id', 'Tag_id:') }}
			{{ Form::text('tag_id') }}
		</li>
		<li>
			{{ Form::label('discussion_id', 'Discussion_id:') }}
			{{ Form::text('discussion_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}