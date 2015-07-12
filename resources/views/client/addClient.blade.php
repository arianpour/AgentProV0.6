@extends ('layouts.dashboard')
@section('page_heading','Add new Client')

@section('section')

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="col-sm-12">
		<div class="row">
			<div class="col-lg-6">
	{{ Form::open(['action' => 'ClientController@store',	'method' => 'post']) }}
				<div class="form-group">
					<label>Name: </label>
					{{ Form::text('name', '', ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>IC/Passport Number:  </label>
					{{ Form::text('idNumber', '', ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Nationality:  </label>
					{{ Form::select('nationality', ['Malaysia','Singapore'] , 1 , ['class' => 'field']) }}
				</div>
				<div class="form-group">
					<label>Email:  </label>
					{{ Form::email('email', 'Email', ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Phone Number:  </label>
					{{ Form::text('phoneNo', null, ['class' => 'form-control']) }}
				</div>

	{{ Form::submit('Submit', ['class' => 'button']) }}

	{{ Form::close() }}
</div>
	</div>
	</div>

@endsection