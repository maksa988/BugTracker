@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', 'Регистрация')

@section('content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
           <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    
    <form method="POST" action="/auth/register">
	    {!! csrf_field() !!}

	    <div class="col-md-6">
	        Name
	        <input type="text" name="name" value="{{ old('name') }}">
	    </div>

	    <div>
	        Email
	        <input type="email" name="email" value="{{ old('email') }}">
	    </div>

	    <div>
	        Password
	        <input type="password" name="password">
	    </div>

	    <div class="col-md-6">
	        Confirm Password
	        <input type="password" name="password_confirmation">
	    </div>

	    <div>
	        <button type="submit">Register</button>
	    </div>
	</form>
@stop