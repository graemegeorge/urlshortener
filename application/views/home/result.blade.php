@layout('master')

@section('container')
	<p>Result:</p>
	{{ HTML::link($shortened, "url.dev/$shortened") }}
@endsection