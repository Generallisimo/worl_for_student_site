<!-- подключаем основной файл с разметкой -->
@extends('shop_doors.layouts.master')
<!-- даем название странице -->
@section('title', 'Auth')
<!-- вставляем контент -->
@section('content')

<section class="reg-area pt-60 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="reg-wrapper">
                                <ul class="nav" id="myTab" role="tablist">
                                    <li class="nav-item mr-40">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item ml-40">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registration</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <div class="field">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                                                @if($errors->has('email'))
                                                    <p class="text-sm text-red-600">{{ $errors->first('email') }}</p>
                                                @endif
                                            </div>
                                            <div class="field">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input id="password" type="password" name="password" required autocomplete="current-password" />
                                                @if($errors->has('password'))
                                                    <p class="text-sm text-red-600">{{ $errors->first('password') }}</p>
                                                @endif
                                            </div>
                                            <button type="submit">{{ __('Log in') }}</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                            <div class="field">
                                                <label for="name">{{ __('Name') }}</label>
                                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                                                @if ($errors->has('name'))
                                                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('name') }}</p>
                                                @endif
                                            </div>
                                            <div class="field">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                                                @if ($errors->has('email'))
                                                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('email') }}</p>
                                                @endif
                                            </div>
                                            <div class="field">
                                                <label for="password">{{ __('Password') }}</label>
                                                <input id="password" type="password" name="password" required autocomplete="new-password" />
                                                @if ($errors->has('password'))
                                                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('password') }}</p>
                                                @endif
                                            </div>
                                            <div class="field">
                                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                @if ($errors->has('password_confirmation'))
                                                    <p class="text-red-500 text-xs mt-1">{{ $errors->first('password_confirmation') }}</p>
                                                @endif
                                            </div>
                                            <button type="submit">{{ __('Register') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection