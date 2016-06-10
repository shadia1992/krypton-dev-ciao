@extends('layouts.master')

@section('content')
<dl>
	<dt>Nom</dt>
	<dd>{{$name}}</dd>
	<dt>Email</dt>
	<dd>{{$email}}</dd>
	<dt>Sexe</dt>
	<dd>{{$sex}}</dd>
	<dt>Année de naissance</dt>
	<dd>{{$birth_year}}</dd>
	<dt>Téléphone</dt>
	<dd>{{$phone_number}}</dd>
</dl>
@endsection