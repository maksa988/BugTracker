@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', 'Bug Tracker by Maksa988')

@section('content')
    <form class="form-signin" action="" method="POST">
      {!! csrf_field() !!}
      <label for="inputName" class="sr-only">Тема</label>
        <input type="name" id="inputName" name="bug_name" class="form-control" placeholder="Тема" required autofocus style="margin-bottom: 10px;" value="">
      <label for="textarea" class="sr-only">Описание ошибки</label>
        <textarea name="bug_text" placeholder="Описание ошибки" class="form-control" required style="margin-bottom: 10px;"></textarea>
      
      <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Добавить</button>
    </form>
@stop