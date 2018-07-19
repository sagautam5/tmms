@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 main-menu">
			<a href="{{URL::to('/teachers')}}">
				<div class="col-md-5 menu-item">Teachers</div>
			</a>
			<a href="{{URL::to('/faculties')}}">
				<div class="col-md-5 menu-item">Faculties</div>
			</a>
		</div>
	</div>
</div>
@endsection

@section('footer')
	@include('layout.footer')
@endsection


@section('imports')
@parent
<script>
	jQuery(document).ready(function($) {
		$('.agentEdit').hide();
	});
</script>
@endsection