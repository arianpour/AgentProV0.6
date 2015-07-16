@extends ('layouts.dashboard')
@section('page_heading','Add new Client')

@section('section')
	<h1>Editing " {{ $client->firstName }} {{ $client->lastName }} "</h1>
	<p class="lead">Edit and save this Client below, or
		<a href="{{ action('ClientController@index') }}">go back to all Clients.</a></p>
	<hr>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif
	<div class="col-sm-12">
		<div class="row">
			<div class="col-lg-6">
				{{Form::model($client,
					['action' => ['ClientController@update', $client],
				'method' => 'post']) }}
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
