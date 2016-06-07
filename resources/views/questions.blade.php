{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('subject_id', 'Subject_id:') }}
			{{ Form::text('subject_id') }}
		</li>
		<li>
			{{ Form::label('user_id', 'User_id:') }}
			{{ Form::text('user_id') }}
		</li>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('content', 'Content:') }}
			{{ Form::textarea('content') }}
		</li>
		<li>
			{{ Form::label('moderated', 'Moderated:') }}
			{{ Form::text('moderated') }}
		</li>
		<li>
			{{ Form::label('answered', 'Answered:') }}
			{{ Form::text('answered') }}
		</li>
		<li>
			{{ Form::label('comment', 'Comment:') }}
			{{ Form::textarea('comment') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}