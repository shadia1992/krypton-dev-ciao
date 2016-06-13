@extends('layouts.master')

@section('content')
<?php $theme = App\Models\Theme::find($id); ?>
<dl>
	<dt>Nom</dt>
	<dd>{{$name}}</dd>
	<dt>Description</dt>
	<dd>{{$content}}</dd>
</dl>
<ul>
	@foreach($subjects as $subject)
		<li>
			<a href="/subject/{{$subject->id}}">{{$subject->name}}</a>
		</li>
	@endforeach
</ul>
@endsection