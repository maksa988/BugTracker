@section('navbar')
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav pull-left">
          <a class="blog-nav-item active" href="/">Главная</a>
          <a class="blog-nav-item" href="/users">Рейтинг пользователей</a>
          <a class="blog-nav-item" href="/bugs">Сообщения</a>
        </nav>
        @if (Auth::check())
          <nav class="blog-nav pull-right">
            <a class="blog-nav-item" href="/bugs/new">Сообщить об ошибке</a>
            <li class="dropdown blog-nav-item">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/user/profile">Профиль</a></li>
                <li><a href="/user/edit">Настройки</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/user/logout">Выход</a></li>
              </ul>
            </li>
          </nav>
        @else
          <nav class="blog-nav pull-right">
            <a class="blog-nav-item" href="/user/login">Войти</a>
            <a class="blog-nav-item" href="/user/register">Регистрация</a>
          </nav>
        @endif
      </div>
    </div>
@stop