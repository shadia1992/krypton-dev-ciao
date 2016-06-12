@extends('layouts.master')

@section('content')
<ol>
	@foreach(App\Models\Theme::all() as $theme)
		<li>
			<a href="/theme/{{$theme->id}}">{{$theme->name}}</a>
		</li>
	@endforeach
</ol>
@endsection