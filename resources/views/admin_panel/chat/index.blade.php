<!-- подключаем основной файл с разметкой -->
@extends('admin_panel.layouts.master')
<!-- даем название странице -->
@section('title_admin', 'Product Admin')
<!-- вставляем контент -->
@section('content_admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard / Chat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <!-- <th>More</th> -->
                      </tr>
                      </thead>
                      <tbody>
                      <!-- создадим цикл перебора массива полученного в контроллере из бд -->
                      @foreach($chat as $item)
                      <tr>
                        <td class="d-flex" style="justify-content: space-between;">
                          {{$item->users->name}}
                          <div class="d-flex">
                              <a href="{{route('admin_chat_view', ['id' => $item->id])}}" class="btn btn-primary"><i class="fa fa-comment"></i></a>
                          </div>
                        </td>
                        <!-- <td> -->
                        <!-- </td> -->
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- / col-12 -->
            </div>
            <!-- / row -->
        </div>
        <!-- / content-fluid -->
    </section>
    <!-- / section-->
</div>
@endsection
