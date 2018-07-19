@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">Faculties</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		@if($faculties->isEmpty())
			<div class="col-md-12">
				<a href="{{URL::to('faculties/create')}}"><div class="col-md-2 add-new">Add New Faculty</div></a>
			</div>

		@else
			<div class="col-md-12">
				<a href="{{URL::to('faculties/create')}}"><div class="col-md-2 add-new">Add New Faculty</div></a>
			</div>
			<div class="col-md-12">
				<table id="faculty-table" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>S.N</th>
						<th>Name</th>
						<th>Modules</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php $i=1;?>
					@foreach($faculties as $faculty)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{$faculty->name }}</td>
							<td>
								@foreach($faculty->modules as $module)
									<div>{{$module->name}}</div>
								@endforeach
							</td>
							<td>
								<div><a href="{{URL::to('faculties/'.$faculty->id.'/modules/create')}}"><i class="fa fa-pencil-square-o"> Add Module</i></a></div>
								<div><a href="{{URL::to('faculties/'.$faculty->id.'/edit')}}"><i class="fa fa-pencil-square-o"> Edit</i></a></div>
								<div><a href="{{URL::to('faculties/')}}"><i class="fa fa-trash"> Delete</i></a></div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
</div>
@endsection

@section('footer')
	@include('layout.footer')
@endsection


@section('imports')
@parent
<script type="text/javascript">
	$(document).ready( function () {
    	$('#faculty-table').DataTable();
	});
</script>
@endsection