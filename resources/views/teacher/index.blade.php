@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">Teachers</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		@if($teachers->isEmpty())
			<div class="col-md-12">
				<a href="{{URL::to('teachers/create')}}"><div class="col-md-2 add-new">Add New Teacher</div></a>
			</div>

		@else
			<div class="col-md-12">
				<a href="{{URL::to('teachers/create')}}"><div class="col-md-2 add-new">Add New Teacher</div></a>
			</div>
			<div class="col-md-12">
				<table id="teacher-table" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>S.N</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Email</th>
						<th>Nationality</th>
						<th>Faculty</th>
						<th>Module</th>
					</tr>
					</thead>
					<tbody>
					<?php $i=1;?>
					@foreach($teachers as $teacher)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{$teacher->name }}</td>
							<td>@if($teacher->gender=='M')Male @elseif($teacher->gender=='F') Female @else Other @endif</td>
							<td>{{$teacher->phone}}</td>
							<td>{{$teacher->address}}</td>
							<td>{{$teacher->email}}</td>
							<td><?php echo App\Nationality::find($teacher->nationality_id)->name;?></td>
							<td><?php echo App\Faculty::find($teacher->faculty_id)->name;?></td>
							<td><?php echo App\Module::find($teacher->module_id)->name;?></td>
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
    	$('#teacher-table').DataTable();
	});
</script>
@endsection