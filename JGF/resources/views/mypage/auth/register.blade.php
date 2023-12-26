@extends('layouts.auth')

@section('header')
    Register
@endsection

@section('content')
<div class="login-form p-7 position-relative overflow-hidden">
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-20">
            <h3 class="text-center mt-15">出展者様向けマイページ<br>企業情報登録フォーム</h3>
            <h5 class="text-center mt-15 second_input"></h5>
        </div>
        <form class="form h-adr" id="register_form" action="/register_check" method="post">
            @csrf
            <span class="p-country-name" style="display:none;">Japan</span>
            <div class="form-group mb-5">
                <label class="form-control-label">出展者名 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_name" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">出展者名（全角カナ） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_name_kana" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">郵便番号 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8 p-postal-code" type="number" name="ct_postal_code" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">住所１（都道府県） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8 p-region" type="text" name="ct_address_1" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">住所２（市区町村） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8 p-locality" type="text" name="ct_address_2" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">住所３（地番） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_address_3" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">住所４（建物名・部屋番号）</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_address_4" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">電話番号（代表） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_phone" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">会社代表者役職 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_representative_title" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">会社代表者名 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_representative_name" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者所属部署 <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_staff_dept" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者名（１） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_staff_1_name" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者メールアドレス（１） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="email" name="ct_staff_1_email" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者電話番号（１） <span class="text-danger">*必須</span></label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="tel" name="ct_staff_1_mobile" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者名（２） </label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_staff_2_name" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者メールアドレス（２）</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="email" name="ct_staff_2_email" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者電話番号（２）</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="tel" name="ct_staff_2_mobile" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">担当者FAX番号</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="tel" name="ct_staff_fax" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">HPアドレス</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_website" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">イベント情報などの掲載先アドレス（HPまたはSNS）</label>
                <input class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" type="text" name="ct_website_event" autocomplete="off" />
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">主な取扱品または業種 (※１つのみ選択)<span class="text-danger">*必須</span></label>
                <select class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" name="ct_products">
                    <option value = "１つ選んでください。">１つ選んでください。</option>
                    <option value = "ゴルフ用品全般">ゴルフ用品全般</option>
                    <option value = "ゴルフクラブ">ゴルフクラブ</option>
                    <option value = "ゴルフボール">ゴルフボール</option>
                    <option value = "クラブシャフト">クラブシャフト</option>
                    <option value = "クラブパーツ（シャフト以外）">クラブパーツ（シャフト以外）</option>
                    <option value = "ゴルフバッグ類">ゴルフバッグ類</option>
                    <option value = "ゴルフアパレル">ゴルフアパレル</option>
                    <option value = "ゴルフ小物">ゴルフ小物</option>
                    <option value = "ゴルフシミュレーター">ゴルフシミュレーター</option>
                    <option value = "距離計測器">距離計測器</option>
                    <option value = "ゴルフ練習用品">ゴルフ練習用品</option>
                    <option value = "ゴルフ関連設備">ゴルフ関連設備</option>
                    <option value = "食品・飲料">食品・飲料</option>
                    <option value = "健康関連製品">健康関連製品</option>
                    <option value = "ゴルフ場">ゴルフ場</option>
                    <option value = "ゴルフ練習場">ゴルフ練習場</option>
                    <option value = "ゴルフ用品卸・販売">ゴルフ用品卸・販売</option>
                    <option value = "ゴルフメディア">ゴルフメディア</option>
                    <option value = "政府観光局">政府観光局</option>
                    <option value = "リゾート施設">リゾート施設</option>
                    <option value = "旅行代理店">旅行代理店</option>
                    <option value = "その他">その他</option>
                </select>
            </div>
            <div class="form-group mb-5">
                <label class="form-control-label">日本ゴルフ用品協会<span class="text-danger">*必須</span></label>
                <select class="form-control ml-3 jgf_input h-auto py-4 px-8" name="ct_jgga_member">
                    <option value = "選択してください。">選択してください。</option>
                    <option value = "非会員">非会員</option>
                    <option value = "会員">会員</option>
                </select>
            </div>
    
            <div class="form-group mb-5">
            <label class="form-control-label">昨年度出展実績<span class="text-danger">*必須</span></label>
            <select class="form-control ml-3 jgf_input h-auto form-control-solid py-4 px-8" name="ct_previous_exhibitor">
                    <option value = "選択してください。">選択してください。</option>
                    <option value = "なし">なし</option>
                    <option value = "あり">あり</option>
                </select>
            </div>
            <div class="form-group text-center mt-10 mb-10">
                <button type="submit" id="register_submit" class="btn btn-primary jgf_btn font-weight-bold px-9 py-4 my-3 mx-4">確認画面へ進む</button>
            </div>
        </form>
        
    </div>
</div>
@endsection
