@inject('helper', 'App\Helpers\Helper')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @yield('navbar')

    <div class="container">

      <div class="blog-header">
        <div class="row">

          <div class="col-md-3">
          <div class="dashboard-window clearfix" style="background: #62acec; border-left: 5px solid #5798d1;">
            <div class="d-w-icon">
              <span class="fa fa-send fa-4x giant-white-icon"></span>
            </div>
            <div class="d-w-text">
               <span class="d-w-num">15</span><br />Комментариев  </div>
          </div>
          </div>

          <div class="col-md-3">
          <div class="dashboard-window clearfix" style="background: #f0ad4e; border-left: 5px solid #d89b45;">
            <div class="d-w-icon">
              <span class="fa fa-wrench fa-4x giant-white-icon"></span>
            </div>
            <div class="d-w-text">
               <span class="d-w-num">19</span><br /> Найдено багов  </div>
          </div>
          </div>

          <div class="col-md-3">
          <div class="dashboard-window clearfix" style="background: #5cb85c; border-left: 5px solid #4f9f4f;">
            <div class="d-w-icon">
              <span class="fa fa-check fa-4x giant-white-icon"></span>
            </div>
            <div class="d-w-text">
               <span class="d-w-num">4</span><br /> Исправлено  </div>
          </div>
          </div>

          <div class="col-md-3">
          <div class="dashboard-window clearfix" style="background: #d9534f; border-left: 5px solid #b94643;">
            <div class="d-w-icon">
              <span class="fa fa-user fa-4x giant-white-icon"></span>
            </div>
            <div class="d-w-text">
               <span class="d-w-num">13</span><br /> Пользователей  </div>
          </div>
          </div>

          </div>
        </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          @yield('content')

        </div><!-- /.blog-main -->

        <div class="col-sm-3 blog-sidebar">
          @yield('sidebar')
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Вверх</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/public/js/ie10-viewport-bug-workaround.js"></script>
    <script src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'bug_text' );
        $('body').tooltip({
          selector: "[data-toggle=tooltip]",
          container: "body"
        })
        $("[data-toggle=popover]")
          .popover()

    </script>
  </body>
</html>
