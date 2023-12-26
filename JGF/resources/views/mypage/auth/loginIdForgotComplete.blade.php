@extends('layouts.auth')

@section('header')
    Login ID Forgot Apply
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-10">
            <h3 class="text-center mb-15 mt-15">出展者様向けマイページ</h3>
            <h6 class="mb-10">ログインID/パスワードを忘れた方</h6>
            <p>フォームの送信が完了いたしました。事務局員が内容を確認の上、追ってご連絡いたします。回答には数日かかる場合がございます。</p>
            <p>お急ぎの方はお手数ですが、 JGF運営事務局へお電話にてお問合せください。</p>
            <br>JAPAN GOLF FAIR 運営事務局<br>TEL:03-4586-7899<br>※土・日・祝日を除く10:00~18:00</p>
        </div>
        <div class="form-group text-right mt-10 mb-10">
            <a href="/" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">ログイン画面に戻る</a>
        </div>
        
    </div>
</div>
@endsection


