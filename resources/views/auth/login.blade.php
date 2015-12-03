@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', 'Авторизация')

@section('content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
           <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <form class="form-signin" style="width: 50%; margin: 0 auto;" action="" method="POST">
    {!! csrf_field() !!}
    	<label for="inputEmail" class="sr-only">Email</label>
			<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus style="margin-bottom: 10px;">
    	<label for="inputPassword" class="sr-only">Пароль</label>
    		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required style="margin-bottom: 10px;">
    	<div class="checkbox">
    		<label><input type="checkbox" name="remember"> Запомнить меня</label>
   		</div>

    	<button class="btn btn-primary" type="submit">Войти</button>
   	</form>
@stop