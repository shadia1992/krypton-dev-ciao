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
	<dt>Origine</dt>
	<dd>{{App\Models\Origin::find($origin_id)->name}}</dd>
	<dt>Groupe</dt>
	<dd>{{App\Models\User::find($id)->groups()->first()['name']}}</dd>
</dl>
@endsection