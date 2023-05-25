<!-- подключаем основной файл с разметкой -->
@extends('admin_panel.layouts.master')
<!-- даем название странице -->
@section('title_admin', 'Order Admin')
<!-- вставляем контент -->
@section('content_admin')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard / Order</h1>
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
                        <th>Summa</th>
                        <th>Data</th>
                        <th>Status</th>
                      </tr>
                      </thead>
                      <tbody>
                      <!-- создадим цикл перебора массива полученного в контроллере из бд -->
                      @foreach($order as $item)
                      <tr>
                        <td>{{$item->users->name}}</td>
                        <td>{{$item->summa}} $</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <form style="display: grid;" action="{{route('admin_order_status', ['id'=>$item->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="">Status:</label>
                                <select name="status" id="status">
                                    <option value="{{ $item->validate_id }}">{{$item->validates->name}}</option>
                                    @foreach($valid as $i)
                                        <option value="{{$i->id}}">{{$i->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn mt-2" style="background-color: #0069d9; border-radius:10px; color:white"><i class="fas fa-save"></i></button>
                            </form>
                        </td>
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
