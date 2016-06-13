@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Modify Theme</div>
			<div class="panel-body">
			<form class="form-horizontal" role="form" method="PUT" action="{{ url('/theme/'.$id) }}">
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

                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="content" class="col-md-4 control-label">Content</label>

                    <div class="col-md-6">
                        <input id="content" rows="5" cols="40" class="form-control" name="content" value="{{old('content') == '' ? $content : old('content')}}">

                        @if ($errors->has('content'))
                            <span class="help-block">
                                <strong>{{ $errors->first('content') }}</strong>
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