@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Modify</div>
			<div class="panel-body">
			<form class="form-horizontal" role="form" method="PUT" action="{{ url('/user/'.$id) }}">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') == '' ? $name : old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') == '' ? $email : old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                    <label for="sex" class="col-md-4 control-label">Sex</label>

                    <div class="col-md-3">
                        <input id="sex" type="radio" class="form-control" name="sex" value="M" <?php if($sex == 'M' && old('sex') !== 'F' || old('sex') == 'M') { echo 'checked="checked"'; } ?>> Male
                    </div>
                    <div class="col-md-3">
                        <input id="sex" type="radio" class="form-control" name="sex" value="F" <?php if($sex == 'F' && old('sex') !== 'M' || old('sex') == 'F') { echo 'checked="checked"'; } ?>> Female

                        @if ($errors->has('sex'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sex') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('birth_year') ? ' has-error' : '' }}">
                    <label for="birth_year" class="col-md-4 control-label">Birth Year</label>

                    <div class="col-md-6">
                        <input id="birth_year" type="number" class="form-control" name="birth_year" value="{{ old('birth_year') == '' ? $birth_year : old('birth_year') }}">

                        @if ($errors->has('birth_year'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birth_year') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                    <label for="phone_number" class="col-md-4 control-label">Phone Number</label>

                    <div class="col-md-6">
                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') == '' ? $phone_number : old('phone_number') }}">

                        @if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('origin_id') ? ' has-error' : '' }}">
                    <label for="origin_id" class="col-md-4 control-label">Origin</label>
                        <div class="col-md-6">
                            <select id="origin_id" name="origin_id" class="form-control">
                                @foreach(App\Models\Origin::all() as $origin)
                                	<option value="{{ $origin->id }}" <?php if($origin_id == $origin->id && old('origin_id') == '' || old('origin_id') == $origin->id){ echo "selected" ;} ?>>{{ $origin->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
        		</div>

                @if(App\Models\User::isAdmin())
        		<div class="form-group{{ $errors->has('group_id') ? ' has-error' : '' }}">
                    <label for="group_id" class="col-md-4 control-label">Group</label>
                        <div class="col-md-6">
                            <select id="group_id" name="group_id" class="form-control">
                                @foreach(App\Models\Group::all() as $group)
                                	<option value="{{ $group->id }}" <?php if($group_id == $group->id && old('group_id') == '' || old('group_id') == $group->id){ echo "selected" ;} ?>>{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
        		</div>
                @endif

        		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> Modify
                        </button>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>
@endsection