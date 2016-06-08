{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('tag_id', 'Tag_id:') }}
			{{ Form::text('tag_id') }}
		</li>
		<li>
			{{ Form::label('question_id', 'Question_id:') }}
			{{ Form::text('question_id') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}