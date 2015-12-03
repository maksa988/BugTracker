@extends("_common.main")
@extends("_common.sidebar")
@extends("_common.navbar")

@section('title', 'Bug Tracker by Maksa988')

@section('content')
    <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 20px;">#</th>
                <th style="width: 20px;"></th>
                <th>Тема</th>
                <th>Дата</th>
                <th>Автор</th>
              </tr>
            </thead>
            <tbody>
                                          <tr style="cursor: pointer;" onclick="location.href='/?p=/bug/3'">
                <td>3</td>
                                <td data-toggle="tooltip" data-placement="top" title="Отклонено"><span class="label label-danger"><i class="fa fa-remove fa-fw"></i></span></td>
                                <td>Тестовый баг</td>
                <td>25.09.2015</td>
                <td>maksa988</td>
              </tr>
                                          <tr style="cursor: pointer;" onclick="location.href='/?p=/bug/2'">
                <td>2</td>
                                <td data-toggle="tooltip" data-placement="top" title="Отклонено"><span class="label label-danger"><i class="fa fa-remove fa-fw"></i></span></td>
                                <td>Ребіцький Максим Володимирович</td>
                <td>23.09.2015</td>
                <td>maksa988</td>
              </tr>
              
                          </tbody>
          </table>

@stop