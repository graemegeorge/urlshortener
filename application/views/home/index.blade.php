@layout('master')

@section('container')

	<h1></h1>
	
	{{ Form::open('/') }}
		{{ Form::text('url') }}
		{{ Form::submit('Shorten') }}
	{{ Form::close() }}
	
@endsection
