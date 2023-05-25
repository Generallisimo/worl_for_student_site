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
            <h1 class="m-0">Dashboard / Chat / Message</h1>
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
                    <a href="{{route('admin_chat')}}" class="btn mb-3" style="background-color: #0069d9a8; border-radius:10px; color:white">Вернуться</a>
                    <div  style="height: 300px; overflow-y: scroll; border:1px solid grey; border-radius:15px; border-bottom-left-radius:0; border-bottom-right-radius:0">
                        @forelse($message as $mes)
                            @if($mes->user_role == 7)
                                <div class="mt-2" style="text-align: right; background-color: #0069d9a8;border-radius:8px; padding: 5px; margin-bottom: 10px;">
                                    <strong></strong> {{ $mes->message }}
                                </div>
                            @else
                            <div style="text-align: left; background-color: #e8e1e154; padding: 5px;border-radius:8px; margin-bottom: 10px;">
                                <strong>User:</strong> {{ $mes->message }}
                            </div>
                            @endif
                            <!-- <div style="text-align: left; background-color: lightgray; padding: 5px; margin-bottom: 10px;">
                                <strong>Admin:</strong> {{ $mes->message }}
                            </div> -->
                        @empty
                        <h1 class="mt-5" style="text-align: center;">Пока что нет сообщений...</h1>
                        @endforelse
                    </div>
                    <div style="height:120px;width: 100%; border:1px solid grey; items-self:end; border-bottom-left-radius:15px; border-bottom-right-radius:10px">
                        <form action="{{route('admin_chat_send', ['id'=>$chatID])}}" method="POST" style="display: grid;">
                            @csrf
                            <input type="text" name="message" placeholder="Сообщение..." style="height: 60px;border-top:none;border-left:none; border-right:none;padding-left: 10px;" required>
                            <button type="submit" class="btn btn-danger mt-2" style="background-color: #cd3301; width:150px; margin:0 auto; border-radius:15px">Отправить</button>
                        </form>
                    </div>
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
