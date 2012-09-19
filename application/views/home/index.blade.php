@layout('master')

@section('container')
	
	{{ Form::open('/') }}
		{{ Form::text('url') }}
		{{ Form::submit('Shorten') }}
	{{ Form::close() }}
	
@endsection
