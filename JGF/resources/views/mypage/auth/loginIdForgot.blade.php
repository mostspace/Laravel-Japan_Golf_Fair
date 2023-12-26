@extends('layouts.auth')

@section('header')
    Login ID Forgot
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-10">
            <h3 class="text-center mb-15 mt-15">出展者様向けマイページ</h3>
            <h6 class="mb-10">ログインID/パスワードを忘れた方</h6>
            <p>下記フォームより必要情報を入力の上送信をお願いします。 事務局員が入力内容を確認の上、 追ってご連絡させて頂きます。回答には数日程度かかる場合がございます。</p>
            <p>お急ぎの方はお手数ですが、 JGF運営事務局へお電話にてお問合せください。</p>
            <br>JAPAN GOLF FAIR 運営事務局<br>TEL:03-4586-7899<br>※土・日・祝日を除く10:00~18:00</p>
        </div>
        <form class="form" method="post" action="/login_id_forgot_check">
            @csrf
            <div class="form-group mb-5">
                <label class="form-control-label">会社名 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_name" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者様お名前 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_staff" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者樣電話番号 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="c_phone" required autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者様メールアドレス <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="email" name="c_email" required autocomplete="off" />
            </div>
            <div class="form-group text-center mt-10 mb-10">
                <button type="submit" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">確認画面へ進む</a>
            </div>
        </form>
    </div>
</div>
@endsection


