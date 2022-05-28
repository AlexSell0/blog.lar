@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите свой e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новая ссылка для подтверждения аккаунта была отправлена на ваш адрес электронной почты.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения аккаунта.') }}
                    {{ __('Если вы не получили электронное письмо') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы повторно отправить письмо с ссылкой для подтвержния аккаунта.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
