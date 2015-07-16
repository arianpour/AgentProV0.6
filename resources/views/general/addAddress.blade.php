@extends ('layouts.dashboard')
@section('page_heading','Add new Address')

@section('section')
	<h1>{{Session::get('addressMessage')}}</h1>

	<hr/>

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
				{{ Form::open(['action' => 'AddressController@store',	'method' => 'post']) }}
				<div class="form-group">
					<label>Unit : </label>
					{{ Form::text('unit', '', ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Street:  </label>
					{{ Form::text('street', '', ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Post Code:  </label>
					{{ Form::text('postCode', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>City:  </label>
					{{ Form::text('city', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>State:  </label>
					{{ Form::text('state', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>country:  </label>
					{{ Form::text('country', null, ['class' => 'form-control']) }}
				</div>

				{{ Form::submit('Submit', ['class' => 'button']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>

@endsection