@extends('layout.master')
@section('title', 'Teacher-Module Management System')

@section('assets')
@parent
@endsection

@section('header')
	@include('layout.header')
@endsection

@section('page-info')
<h2 class="page-info">{{trans('app.Teachers')}}</h2>
@endsection

@section('content')
<div class="container">
	<div class="row">
		@if($teachers->isEmpty())
			<div class="col-md-12">
				<a href="{{URL::to('teachers/create')}}"><div class="col-md-2 add-new">{{trans('app.Add_New_Teacher')}}</div></a>
			</div>

		@else
			<div class="col-md-12">
				<a href="{{URL::to('teachers/create')}}"><div class="col-md-2 add-new">{{trans('app.Add_New_Teacher')}}</div></a>
			</div>
			<div class="col-md-12">
				<table id="teacher-table" class="table table-striped table-bordered">
					<thead>
					<tr>
						<th>{{trans('app.SN')}}</th>
						<th>{{trans('app.Name')}}</th>
						<th>{{trans('app.Gender')}}</th>
						<th>{{trans('app.Phone')}}</th>
						<th>{{trans('app.Address')}}</th>
						<th>{{trans('app.Email')}}</th>
						<th>{{trans('app.Nationality')}}</th>
						<th>{{trans('app.Faculty')}}</th>
						<th>{{trans('app.Module')}}</th>
					</tr>
					</thead>
					<tbody>
					<?php $i=1;?>
					@foreach($teachers as $teacher)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{$teacher->name }}</td>
							<td>@if($teacher->gender=='M'){{trans('app.Male')}} @elseif($teacher->gender=='F') {{trans('app.Female')}} @else {{trans('app.Other')}} @endif</td>
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
    	$('#teacher-table').DataTable({
    		dom: 'Bfrtip',
    		buttons:[
    			'csv', 'excel','pdf'
    		]
    	});
	});
</script>
@endsection