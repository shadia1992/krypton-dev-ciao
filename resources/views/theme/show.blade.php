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
		<li>{{$subject->name}}</li>
	@endforeach
</ul>
@endsection