@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">{{trans('app.Edit_Faculty')}}</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<form class="form-horizontal" action="{{ URL::to('faculties/'.$faculty->id)}}" method="POST" role="form">
				{{ csrf_field() }}
				{{method_field('PUT')}}
				
				<div class="form-group">
					<div class="col-md-6">
						<label class="label-control" for="name">{{trans('app.Faculty_Name')}} </label>
						<input id="name" class="form-control" name="name" value="{{$faculty->name}}">
						@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<button type="submit" class="btn btn-default pull-right"> {{trans('app.Update')}} </button>
					</div>
					
				</div>
			</form>
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