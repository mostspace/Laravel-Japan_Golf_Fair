@extends('layouts.auth')

@section('header')
    Login ID Forgot Check
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-10">
            <h3 class="text-center mb-15 mt-15">出展者様向けマイページ</h3>
            <h6 class="mb-10">ログインID/パスワードを忘れた方</h6>
        </div>
        <form class="form" id="register_form" method="post" action="/register_check" onsubmit="return false;">
            <div class="form-group mb-5">
                <label class="form-control-label">会社名 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_name" value="{{ $data['c_name'] }}" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者様お名前 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_staff" value="{{ $data['c_staff'] }}" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者樣電話番号 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_phone" value="{{ $data['c_phone'] }}" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者様メールアドレス <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="email" name="c_email" value="{{ $data['c_email'] }}" required autocomplete="off" />
            </div>
            <div class="form-group text-center mt-10 mb-10">
                <button id="register_submit" type="submit" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">送信</a>
            </div>
        </form>
    </div>
</div>
@endsection

@section('add_js')
<script>
    $(document).ready(function() {
        $("#register_submit").click(function() {
            $.ajax({
                url: '/login_id_forgot_check_complete',
                type: 'POST',
                data: $("#register_form").serialize(),
                success: function(response) {
                    if (response.status === 0) {
                        window.location.href = "/login_id_forgot_complete";
                    } else {
                        window.location.href = "/login_id_forgot";
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

