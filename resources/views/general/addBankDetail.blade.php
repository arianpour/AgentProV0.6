@extends ('layouts.dashboard')
@section('page_heading','Edit Bank Details')

@section('section')
	<h1>Add bank Detail</h1>

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
				{{ Form::open(['action' => 'BankDetailController@store', 'method' => 'post']) }}
				<div class="form-group">
					<label>Unit : </label>
					{{ Form::text('bankName', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					<label>Street:  </label>
					{{ Form::text('accountNo', null, ['class' => 'form-control']) }}
				</div>
				{{ Form::submit('Submit', ['class' => 'button']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>


@endsection