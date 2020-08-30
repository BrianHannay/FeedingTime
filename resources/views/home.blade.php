@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
			<my-feedings></my-feedings>
                <div class="card-header">{{ __('Post a Feeding') }}</div>
                <div class="card-body">
			<form method="post" action="{{ route('post') }}">
				@csrf
				<location-input></location-input>
				<label for="date">Date/Time of Feeding</label><br>
				<input type="datetime" name="date" id="date"><br>
				<label for="count">How many ducks were fed?</label><br>
				<input type="number" name="count" id="count"><br>
				<food-input></food-input>
			</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
