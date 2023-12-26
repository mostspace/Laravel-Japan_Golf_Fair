@extends('layouts.auth')

@section('header')
    Login
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-15">
            <h3 class="text-center">出展者様向けマイページ</h3>
        </div>
        <h5 class="login_incorrect text-danger mb-5"></h5>
        <form class="form" id="loginForm" onsubmit="return false;">
            <div class="form-group mb-5">
                <label class="form-control-label">ログインID</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="login_id" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">パスワード</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="password" name="login_pass" />
            </div>
            <div class="form-group text-center mt-10 mb-10">
                <button id="login_submit" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">ログイン</button>
            </div>
        </form>
        <div class="jgf_login_forgot mt-5 text-center">IDまたはパスワードを忘れた方
            <a href="/login_id_forgot" class="text-primary">こちら</a>
        </div>
        <p class="mt-10 text-center">
            ログインIDをお持ちでない方は下記より<br>新規登録をお願いいたします。
        </p>
        <div class="form-group text-center mt-10 mb-10">
            <a href="/register" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">新規登録</a>
        </div>
    </div>
</div>
@endsection

@section('add_js')
<script>
    $(document).ready(function() {
        $("#login_submit").click(function() {
            $.ajax({
                url: '/mp_login',
                type: 'POST',
                data: $("#loginForm").serialize(),
                success: function(response) {
                    if (response == 0) {
                        $(".login_incorrect").text("");
                        window.location.href = "/mypage";
                    } else {
                        $(".login_incorrect").text("IDまたはパスワードが違います。");
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endsection