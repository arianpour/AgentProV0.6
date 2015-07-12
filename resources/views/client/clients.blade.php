@extends('layouts.dashboard')
@section('page_heading','Tenant Lists')
@section('section')


	@if(!$clientList->isEmpty())
		@foreach($clientList as $client)
			<ul>
				{{$client->name}}
				<p>{{ $client->idNumber}}</p>
				<p>
					<a href="{{ action('ClientController@show', $client) }}" class="btn btn-info">View Client</a>
					<a href="{{ action('ClientController@edit', $client) }}" class="btn btn-primary">Edit Client</a>
				</p>
				<hr>
			</ul>
		@endforeach
	@else
		@include('widgets.alert', array('class'=>'warning ',
		 'message'=> 'No Tenant Added yet , please add new Tenant'))
	@endif

@endsection