{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('origin_id', 'Origin_id:') }}
			{{ Form::text('origin_id') }}
		</li>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('sex', 'Sex:') }}
			{{ Form::text('sex') }}
		</li>
		<li>
			{{ Form::label('birth_year', 'Birth_year:') }}
			{{ Form::text('birth_year') }}
		</li>
		<li>
			{{ Form::label('phone_number', 'Phone_number:') }}
			{{ Form::text('phone_number') }}
		</li>
		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::text('password') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}