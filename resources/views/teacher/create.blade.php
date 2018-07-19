@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">Add Teacher</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{URL::to('teachers')}}" class="form-horizontal" method="POST" role="form">
			 	{{ csrf_field() }}
				<div class="col-md-6">
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input id="name" type="text" name="name" class="form-control">
						@if($errors->has('name'))
						<span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label">Gender</label>
						<div class="checkbox">
							<label><input id="gender" type="radio" name="gender" value="M" checked> Male</label>
							<label><input id="gender" type="radio" name="gender" value="F"> Female</label>
							<label><input id="gender" type="radio" name="gender" value="O"> Other </label> 
						</div>
  						@if($errors->has('gender'))
						<span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="phone" class="control-label">Phone</label>
						<input id="phone" type="text" name="phone" class="form-control">
						@if($errors->has('phone'))
						<span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input id="email" type="email" name="email" class="form-control">
						@if($errors->has('email'))
						<span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="address" class="control-label">Address</label>
						<input id="address" type="text" name="address" class="form-control">
						@if($errors->has('address'))
						<span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="date_of_birth" class="control-label">Date of Birth</label>
						<input id="date_of_birth" type="text" name="date_of_birth" class="form-control">
						@if($errors->has('date_of_birth'))
						<span class="help-block">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="faculty" class="control-label">Faculty</label>
						<select id="faculty" type="text" name="faculty" class="form-control">
							<option value="" selected="">Select Faculty</option>
							@foreach($faculties as $faculty)
								<option value="{{$faculty->id}}">{{$faculty->name}}</option>
							@endforeach
						</select>
						@if($errors->has('faculty'))
						<span class="help-block">
                            <strong>{{ $errors->first('faculty') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="module" class="control-label">Modules</label>
						<select id="module" type="text" name="module" class="form-control">
							<option value="" selected="">Select Modules</option>
						</select>
						@if($errors->has('module'))
						<span class="help-block">
                            <strong>{{ $errors->first('module') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-default pull-right" type="submit">Create</button>
				</div></form>
		</div>
	</div>
</div>
@endsection

@section('footer')
	@include('layout.footer')
@endsection


@section('imports')
@parent

@endsection