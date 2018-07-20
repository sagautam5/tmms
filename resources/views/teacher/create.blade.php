@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">{{trans('app.Add_Teacher')}}</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<form action="{{URL::to('teachers')}}" class="form-horizontal" method="POST" role="form">
			<div class="col-md-12">
			 	{{ csrf_field() }}
				<div class="col-md-5">
					<div class="form-group">
						<label for="name" class="control-label">{{trans('app.Name')}}</label>
						<input id="name" type="text" name="name" class="form-control" value="{{old('name')}}">
						@if($errors->has('name'))
						<span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
						@endif
					</div>
				</div>
				<div class="col-md-5 col-md-push-1">
					<div class="form-group">
						<label class="control-label">{{trans('app.Gender')}}</label>
						<div class="checkbox">
							<label><input id="gender" type="radio" name="gender" value="M" checked> {{trans('app.Male')}}</label>
							<label><input id="gender" type="radio" name="gender" value="F" @if(old('gender')=='F') checked @endif> {{trans('app.Female')}}</label>
							<label><input id="gender" type="radio" name="gender" value="O" @if(old('gender')=='O') checked @endif> {{trans('app.Other')}} </label> 
						</div>
  						@if($errors->has('gender'))
						<span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
						@endif
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="col-md-5">
					<div class="form-group">
						<label for="phone" class="control-label">{{trans('app.Phone')}}</label>
						<input id="phone" type="text" name="phone" class="form-control" value="{{old('phone')}}">
						@if($errors->has('phone'))
						<span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-5 col-md-push-1">
					<div class="form-group">
						<label for="email" class="control-label">{{trans('app.Email')}}</label>
						<input id="email" type="email" name="email" class="form-control" value="{{old('email')}}">
						@if($errors->has('email'))
						<span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
						@endif
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="col-md-5">
					<div class="form-group">
						<label for="address" class="control-label">{{trans('app.Address')}}</label>
						<input id="address" type="text" name="address" class="form-control" value="{{old('email')}}">
						@if($errors->has('address'))
						<span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
						@endif
					</div>
				</div>

				<div class="col-md-5 col-md-push-1">
					<div class="form-group">
						<label for="date_of_birth" class="control-label">{{trans('app.Date_of_Birth')}}</label> (Format: YYYY-MM-DD)
						<input id="date_of_birth" type="text" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}">
						@if($errors->has('date_of_birth'))
						<span class="help-block">
                            <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
						@endif
					</div>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="form-group">
						<label for="faculty_id" class="control-label">{{trans('app.Faculty')}}</label>
						<select id="faculty_id" type="text" name="faculty_id" class="form-control">
							<option value="" selected=""> {{trans('app.Select_Faculty')}}</option>
							@foreach($faculties as $faculty)
								<option value="{{$faculty->id}}">{{$faculty->name}}</option>
							@endforeach
						</select>
						@if($errors->has('faculty_id'))
						<span class="help-block">
                            <strong>{{ $errors->first('faculty_id') }}</strong>
                        </span>
						@endif
					</div>
				</div>
				<div class="col-md-5 col-md-push-1">
					<div class="form-group">
						<label for="module_id" class="control-label">{{trans('app.Select_Module')}}</label>
						<select id="module_id" type="text" name="module_id" class="form-control">
							<option value="" selected=""> {{trans('app.Select_Module')}}</option>
						</select>
						@if($errors->has('modules_id'))
						<span class="help-block">
                            <strong>{{ $errors->first('modules_id') }}</strong>
                        </span>
						@endif
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="col-md-5">
					<div class="form-group">
						<label for="nationality_id" class="control-label">{{trans('app.Nationality')}}</label>
						<select id="nationality_id" type="text" name="nationality_id" class="form-control">
							<option value="" selected=""> {{trans('app.Select_Nationality')}}</option>
							@foreach($nationalities as $nationality)
								<option value="{{$nationality->id}}" @if(old('nationality_id')==$nationality->id) selected="" @endif>{{$nationality->name}}</option>
							@endforeach
						</select>
						@if($errors->has('nationality_id'))
						<span class="help-block">
                            <strong>{{ $errors->first('nationality_id') }}</strong>
                        </span>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5 col-md-push-10">
					<div class="form-group">
						<button class="btn btn-default" type="submit">{{trans('app.Create')}}</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection

@section('footer')
	@include('layout.footer')
@endsection


@section('imports')
@parent
<script>
    jQuery(document).ready(function ($) {
        $('select[name=faculty_id]').on('change', function () {
        	var selected = $(this).find(":selected").attr('value');
        	if(selected){
	        	$.ajax({
	                        url: base_url + '/modules/'+selected+'/faculty/',
	                        type: 'GET',
	                        dataType: 'json',

	                }).done(function (data) {

	                	var select = $('select[name=module_id]');
	                	select.empty();
	                	select.append('<option value=""> Select Module</option>');
	                    $.each(data,function(key, value) {
	                		select.append('<option value=' + value.id + '>' + value.name + '</option>');
	            		});
	                    console.log("success");
	            })
            }
            else{
            	var select = $('select[name=module_id]');
            	select.empty();
            	select.append('<option value=""> Select Modules</option>')
            }
       	 });
    });
</script>
@endsection