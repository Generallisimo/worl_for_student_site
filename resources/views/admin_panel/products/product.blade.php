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
            <h1 class="m-0">Dashboard / Products</h1>
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
                  <div class="card-header">
                    <a href="{{route('admin_add_product')}}">
                      <button type="button" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> 
                        Add Products
                      </button>
                    </a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Categories</th>
                        <th>Price</th>
                        <th>More</th>
                      </tr>
                      </thead>
                      <tbody>
                      <!-- создадим цикл перебора массива полученного в контроллере из бд -->
                      @foreach($products as $product)
                      <tr>
                        <!-- выводим названия стоблцов -->
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <!-- выводим картинку -->
                        <td style="text-align: center;"><img src="{{ asset('images/'.$product->image)}}" style="width: 60px;"></td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}} $</td>
                        <!-- добавим кнопок -->
                        <td>
                          <div class="d-flex">
                            <!-- кнопкпа изменеить -->
                            <form method="POST" action="{{route('admin_update_product', ['id'=>$product->id])}}">
                            @csrf
                            @method('POST')
                              <button class="btn btn-primary">Up</button>
                            </form>
                            <!-- кнопка удалить -->
                            <form class="ml-2 " method="POST" action="{{route('admin_delete_product', ['id'=>$product->id])}}">
                            @csrf
                            @method('DELETE')
                              <button class="btn btn-danger">Del</button>
                            </form>
                          </div>
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
