@extends('layouts.auth')

@section('header')
    Register Complete
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <div class="login-signin">
        <div class="mb-20">
            <h3 class="text-center">出展者様向けマイページ<br>企業情報登録フォーム</h3>
        </div>
        <p class="mt-10">
            企業情報のご登録頂きありがとうございました。 事務局員が内容を確認の上、ご連絡させて頂きます。 今しばらくお待ちくださいませ。
        </p>
        <div class="form-group text-right mt-10 mb-10">
            <a href="/" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">ログイン画面に戻る</a>
        </div>
    </div>
</div>
@endsection


