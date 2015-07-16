@extends('layouts.dashboard')
@section('page_heading')
@section('section')

	<div class="row">
		<div class="col-sm-12">
			@section ('stable_panel_title','Tenant Lists')

			@section ('stable_panel_body')

				<table class="table table-bordered">
					<thead>
					<tr>
						<th>Name</th>
						<th>IC / Passport</th>
					</tr>
					</thead>

	@if(!$clientList->isEmpty())
		@foreach($clientList as $client)

							<tbody>
							<tr class="striped">
								<td>{{$client->name}}</td>
								<td>{{ $client->idNumber}}</td>
								<td>
									<a href="{{ action('ClientController@show', $client) }}">
										@include('widgets.button', array('value'=>'View Tenant', 'class'=>'primary'))</a>

									<a href="{{ action('ClientController@edit', $client) }}">
										@include('widgets.button', array('value'=>'Edit Tenant', 'class'=>'primary'))</a>
								</td>
							</tr>
		@endforeach
							</tbody>
				</table>
				@endsection

					@include('widgets.panel', array('header'=>true, 'as'=>'stable'))
		</div>
	</div>
	@else
		@include('widgets.alert', array('class'=>'warning ',
		 'message'=> 'No Tenant Added yet , please add new Tenant'))
	@endif

@endsection