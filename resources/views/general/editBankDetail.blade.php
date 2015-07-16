@extends ('layouts.dashboard')
@section('page_heading','Edit Bank Details')

@section('section')
	<h1>Editing " {{ $client->firstName }} {{ $client->lastName }} "</h1>
	<p class="lead">Edit and save this Client's Bank details below, or
		<a href="{{ action('OwnerController@index') }}">go back to all Owners List.</a></p>
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
				{{ Form::model($bank,
					['action' => ['BankDetailController@update', $bank],
						'method' => 'post']) }}
				<div class="form-group">
					<label>Unit : </label>
					{{ Form::text('bankName', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Street:  </label>
					{{ Form::text('accountNo', null, ['class' => 'form-control']) }}
				</div>


				{{ Form::submit('Update Bank Details', ['class' => 'button']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>

@endsection