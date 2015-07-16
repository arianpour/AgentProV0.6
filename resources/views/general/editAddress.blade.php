@extends ('layouts.dashboard')
@section('page_heading','Edit Address')

@section('section')

	<h1>Editing " {{ $client->name }}  "</h1>
	<!--TODO: fix the return page by if the pages redirect from owner,Client
	or property goes back to their listing -->
	<p class="lead">Edit and save this Address below.</p>
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
				{{ Form::model($address,
	['action' => ['AddressController@update', $address->id],
	'method' => 'post']) }}
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

				{{ Form::submit('Update address', ['class' => 'button']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>

@endsection
