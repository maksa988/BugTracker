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
    
	<form class="form-signin" style="width: 40%; margin: 0 auto;" action="" method="POST">
	    {!! csrf_field() !!}

	    <label for="inputName" class="sr-only">Логин</label>
	    	<input type="name" id="inputName" name="name" class="form-control" placeholder="Логин" required autofocus style="margin-bottom: 10px;">
	    <label for="inputEmail" class="sr-only">Email</label>
	    	<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus style="margin-bottom: 10px;">
	    <label for="inputPassword" class="sr-only">Пароль</label>
	    	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required style="margin-bottom: 10px;">
	    <label for="inputpassword_confirmation" class="sr-only">Повторите пароль</label>
	    	<input type="password" id="inputpassword_confirmation" name="password_confirmation" class="form-control" placeholder="Повторите пароль" required style="margin-bottom: 10px;">
	    <button class="btn btn-primary" type="submit">Зарегестрироваться</button>
	</form>
@stop