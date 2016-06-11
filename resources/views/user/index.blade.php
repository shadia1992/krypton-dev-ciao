@extends('layouts.master')
@section('content')
<ol>
	@foreach(App\Models\User::all() as $user)
		<li>
			<a href="/user/{{$user->id}}">{{$user->name}}</a>
		</li>
	@endforeach
</ol>
@endsection