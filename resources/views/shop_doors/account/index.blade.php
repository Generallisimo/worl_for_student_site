@extends('shop_doors.layouts.master')

@section('title', 'Account')

@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-md-12 my_div" style="justify-content: space-around;">
            <div class=" section">
                @if(auth()->user()->hasRole('users'))
                <div class="section mb-3" style="width: 80%;margin:0 auto; text-align:center">
                    <h2  style="font-size:35px">Чат с сотрудниками</h2>
                    <a href="{{route('chat_view', ['id'=>'user_id'])}}" class="btn btn-danger mt-3" style="border-radius:5px ;background-color: #cd3301;">Перейти в чат</a>
                    <!-- <p>Здесь будет отображаться переписка с администратором.</p> -->
                </div>
                @endif
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            Информация о профиле
                        </h2>
                        <p class="mt-1 text-sm text-gray-600">
                            Обновите информацию о вашем профиле и адрес электронной почты.
                        </p>
                    </header>
                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')
                        <div style="display: grid;">
                            <label for="name" class="">Имя:</label>
                            <input style="text-align:center; border:1px solid #edebeb; border-radius:5px" id="name" name="name" type="text" class="" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-2" style="display: grid;">
                            <label for="email" class="">Email:</label>
                            <input style="text-align:center;  border:1px solid #edebeb; border-radius:5px" id="email" name="email" type="email" class="" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center gap-4 mt-3" style="text-align:center">
                            <button type="submit" class="btn btn-danger" style="background-color: #cd3301; border-radius:5px">{{ __('Сохранить') }}</button>
                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Сохранено.') }}</p>
                            @endif
                        </div>
                    </form>
                </section>
            </div>
            <div class="section">
                <h2>История заказов</h2>
                @if($order->count() > 0)
                    @foreach($order as $item)
                    <!-- <p>{{substr($item->product->desc, 1, 50)}}...</p> -->
                    <li class="mb-20 d-flex" style="justify-content: space-between; border:1px solid grey; border-radius:10px">
                        <div class="cart-image">
                            <a href="#"><img style="width:100px; border-radius:9px; border-bottom-right-radius:0;border-top-right-radius:0;" src="{{asset('images/'.$item->product->image)}}" alt=""></a>
                        </div>
                        <div class="cart-text" style="display: grid;">
                            <a href="#" class="title f-400 cod__black-color">{{$item->product->name}}</a>
                            <span class="cart-price f-400 dusty__gray-color">Quantity: <span class="price f-800 cod__black-color"> {{$item->quantity}}</span></span>
                            <span class="cart-price f-400 dusty__gray-color">Total: <span class="price f-800 cod__black-color">$ {{$item->summa}}</span></span>
                            <span class="cart-price f-400 dusty__gray-color">Status: <span class="price f-800 cod__black-color">{{$item->validates->name}}</span></span>
                        </div> 
                    </li>
                    @endforeach
                @else
                    <p>Пока вы еще ничего не покупали...</p>
                @endif
            
            
            </div>
        </div>
    </div>
</div>
@endsection
