@extends('layouts.emaillayout')

@section('content')

<p><h5><strong>Hello!</strong></h5></p>

<p>You are receiving this email because we received a password reset request for your account.</p>

<p><a href="{!! $url !!}"><button class="btn btn-primary">Reset Password</button></a></p>

<p>This password reset link will expire in {{ config('auth.passwords.users.expire') }} minutes.</p>

<p>If you did not request a password reset, no further action is required.</p>

<p>
    <div>Regards,</div>
    <div>{{ config('app.name') }} Team</div>
</p>

<p><hr /></p>

<p><small>If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href="{!! $url !!}">{!! $url !!}</a></small></p>

@endsection