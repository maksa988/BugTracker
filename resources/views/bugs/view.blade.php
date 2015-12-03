@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', $bug->bug_name)

@section('content')
     <div class="panel panel-default">
	    <div class="panel-heading">
	    	<div class="pull-left">{{ $bug->bug_name }}</div>
	      	<div class="pull-right"><i class="fa fa-calendar"></i> {!! $bug->bug_time !!}</div>
	      	<div class="clear"></div>
	    </div>
	    <div class="panel-body">
	    	{!! $bug->bug_text !!}
	    </div>
	    <div class="panel-footer">
	    	@if($bug->bug_status == 0)
	      	<span class="label label-info"><i class="fa fa-eye fa-fw"></i> На рассмотрении</span>
	      	@elseif($bug->bug_status == 1)
	      	<span class="label label-danger"><i class="fa fa-remove fa-fw"></i> Отклонено</span>
	      	@elseif($bug->bug_status == 2)
	      	<span class="label label-success"><i class="fa fa-check fa-fw"></i> Исправлено</span>
	      	@elseif($bug->bug_status == 3)
	      	<span class="label label-warning"><i class="fa fa-wrench fa-fw"></i> Исправляется</span>
	      	@endif

	      	@if(@Auth::user()->group == 1)
	      		<a href="?status=2" data-toggle="tooltip" data-placement="top" title="Исправляется"><i class="fa fa-wrench fa-fw"></i></a>
	      		<a href="?status=3" data-toggle="tooltip" data-placement="top" title="Исправлено"><i class="fa fa-check fa-fw"></i></a>
	      		<a href="?status=1" data-toggle="tooltip" data-placement="top" title="Отклонено"><i class="fa fa-remove fa-fw"></i></a>
	     	@endif
	     	<div class="pull-right"><i class="fa fa-user"></i> {{ $user->name }}</div>
	    </div>
	  </div>

	  <nav>
	    <ul class="pager">
	      <li><a href="javascript:history.back()"><span aria-hidden="true">&larr;</span> Назад</a></li>
	    </ul>
	  </nav>

@stop