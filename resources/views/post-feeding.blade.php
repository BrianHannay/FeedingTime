@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post a Feeding') }}</div>

                <div class="card-body">
			<form method="post" action="{{ route('post') }}">
    			@csrf
				<label for="location">Search a location or select one on the map below</label><br>
				<input id="location" name="location">
				<script>
				$('location').on('keyup', function() {
					$.get("{{ route('searchLocations') }}", { search: $(this).val() }, function(result) {
						alert(result);
					});
				});
				</script>
			</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
