{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('user_id', 'User_id:') }}
			{{ Form::text('user_id') }}
		</li>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('score', 'Score:') }}
			{{ Form::text('score') }}
		</li>
		<li>
			{{ Form::label('moderated', 'Moderated:') }}
			{{ Form::text('moderated') }}
		</li>
		<li>
			{{ Form::label('certificated', 'Certificated:') }}
			{{ Form::text('certificated') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}