@extends('admin_panel.layouts.master')
<!-- даем название странице -->
@section('title_admin', 'Product Add Admin')
<!-- вставляем контент -->
@section('content_admin')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard / Products / Add New </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"  method="POST" enctype="multipart/form-data" action="{{route('admin_create_product')}}">
                <!-- создаем токен отправки -->
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <!-- далее мы подставляем нужные нам значения для создания полей -->
                    <label for="name">Name Product</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Add new name product">
                  </div>
                  <div class="form-group">
                    <label for="description">Description Product</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Add new description product"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">Image Product</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="price">Price Product</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Add new price product">
                  </div>
                  <div class="form-group">
                      <label for="category_id">Category For Product</label>
                      <select name="category_id" class="form-control" id="category_id" placeholder="Add new category for product">
                          <!-- цикл для категорий -->
                          @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

@endsection