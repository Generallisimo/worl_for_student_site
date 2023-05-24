@extends('shop_doors.layouts.master')

@section('title', 'Account')

@section('content')
<div class="container mb-5  mt-5">
    <div style="width:80%; margin:0 auto;">
        <h1 class="mb-5" style="text-align: center;">Чат с сотрудником</h1>
        <a href="{{route('account')}}" class="btn mb-2" style="border-radius: 15px; color:white; background-color: #cd3301;">Вернуться</a>
        <div  style="height: 300px; overflow-y: scroll; border:1px solid grey; border-radius:15px; border-bottom-left-radius:0; border-bottom-right-radius:0">
            @forelse($messages as $mes)
                @if($mes->user_role == 7)
                    <div style="text-align: left; background-color: #e8e1e154; padding: 5px;border-radius:8px; margin-bottom: 10px;">
                        <strong>Admin:</strong> {{ $mes->message }}
                    </div>
                @else
                <div class="mt-2" style="text-align: right; background-color: #ff000096;border-radius:8px; padding: 5px; margin-bottom: 10px;">
                    <strong></strong> {{ $mes->message }}
                </div>
                @endif
                <!-- <div style="text-align: left; background-color: lightgray; padding: 5px; margin-bottom: 10px;">
                    <strong>Admin:</strong> {{ $mes->message }}
                </div> -->
            @empty
            <h1 class="mt-5" style="text-align: center;">Пока что нет сообщений...</h1>
            @endforelse
        </div>
        <div style="height:120px;width: 100%; border:1px solid grey; items-self:end; border-bottom-left-radius:15px; border-bottom-right-radius:15px">
            <form action="{{route('chat')}}" method="POST" style="display: grid;">
                @csrf
                <input type="text" name="message" placeholder="Сообщение..." style="height: 60px;border-top:none;border-left:none; border-right:none;padding-left: 10px;" required>
                <button type="submit" class="btn btn-danger mt-2" style="background-color: #cd3301; width:150px; margin:0 auto; border-radius:15px">Отправить</button>
            </form>
        </div>
    </div>
</div>
@endsection
