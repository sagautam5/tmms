<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{URL::to('/')}}"><div class=" col-md-10 main-title">{{trans('app.Teacher')}}- {{trans('app.Module')}} {{trans('app.Management')}} {{trans('app.System')}}</div></a>
				<div class="col-md-2">
					{{ csrf_field() }}
					<select class="language-selector" name="language">
						@if(Session::get('locale',Config::get('app.locale'))=='en')
						<option value="en" selected="">English</option>
						<option value="np">{{trans('app.Nepali')}}</option>
						@else
						<option value="en">English</option>
						<option value="np" selected="">{{trans('app.Nepali')}}</option>
						@endif
					</select>
				</div>
			</div>
		</div>
	</div>
</header>
