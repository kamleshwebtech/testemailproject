<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
h1{
    font-size: 48px;
}
h2{
    font-size: 32px;
}
h3{
    font-size: 28px;
}
h4{
    font-size: 24px;
}
h5{
    font-size: 16px;
}
small{
    font-size: 14px;
}
body {
    background-color: #10384d;
    color: #52525b;
    font-family: Helvetica, sans-serif, arial;
    -webkit-font-smoothing: antialiased;
    font-size: 16px;
    line-height: 1.5;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    word-break: break-all;
}
a, a:link, a:hover, a:visited, a:focus, a:active{
    color: #18181b;
}
button, .btn {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
button, .btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}
button:hover, .btn-primary:hover {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
}
hr{
    border: 0;
    border-top: solid 1px #cacaca;
}
.wrapper{
    background-color: #ffffff;border-radius:10px;border:solid 1px #cacaca;margin:0px auto;max-width: 600px;
}
.header{
    background-color: #f4f5f6;border-radius:10px 10px 0px 0px;border-bottom:solid 1px #cacaca;
}
.header .content-cell{
    padding: 20px; text-align:center;
}
.header img{
    max-width: 350px;
    max-height: 100px;
}
td.body{
    padding: 20px;
}
.footer{
    background-color: #f4f5f6;border-radius:0px 0px 10px 10px;border-top:solid 1px #cacaca;
}
.footer .content-cell{
    padding: 20px; text-align:center;
}
@media only screen and (max-width: 600px) {
    .wrapper{
        max-width: 100% !important;
    }
}
</style>
</head>
<body>
<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation">
    <tr>
        <td align="center">
            <table class="header" width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation">
            <tr>
                <td class="content-cell"><a href="{{ config('app.url') }}" target="_blank" style="display: inline-block;"><img src="https://laravel.com/img/notification-logo-v2.1.png" class="logo" alt="Laravel Logo"></a></td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="body">
            <table class="inner-body" width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation">
                <tr>
                    <td class="content-cell">
                        @yield('content')

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table class="footer" width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation">
            <tr>
                <td class="content-cell">Copyright © {{ config('app.name') }}. All rights reserved.</td>
            </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>