@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', 'Bug Tracker by Maksa988')

@section('content')
    <form method="POST" action="/password/email">
	    {!! csrf_field() !!}

	    <div>
	        Email
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div>
	        <button type="submit">
	            Send Password Reset Link
	        </button>
	    </div>
	</form>
@stop