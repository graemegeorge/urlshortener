@layout('master')

@section('container')
	
	{{ Form::open('/') }}
		{{ Form::text('url') }}
	{{ Form::close() }}
	
	{{ $errors->first('url', '<p class="error">:message</p>') }}
	
@endsection
