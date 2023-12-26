<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/jgf_style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_inner">
                            <div class="block block--logo">
                                <a class="anchor" href="https://exhibitor.japangolffair.com"><img class="image image--logo" src="https://exhibitor.japangolffair.com/images/front/jgflogo.png" alt="Japan Golf Fair"></a>
                                <h1 class="heading heading--catch">
                                    <img class="image" src="https://exhibitor.japangolffair.com/images/front/jgfcatch.png" alt="Japan Golf Fair">
                                </h1>
                            </div>
                            <div class="block block--menu">
                                <div class="block__item block__item--sp-menu">
                                    <button class="btn btn--sp-menu" type="button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <nav class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list list--nav list--nav3">
                            <li class="list__item"><a class="list__item__link" href="//www.japangolffair.com/" target="_blank">TOP</a></li>
                            <li class="list__item"><a class="list__item__link" href="https://exhibitor.japangolffair.com/inquiry/create">お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="main">
            <section class="section section--mypage">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="heading heading--section-title">マイページ</h2>
                            <p class="text text--mypage-text">会社情報登録の内容を修正する場合は、下記『会社情報管理』より修正ください。</p>
                        </div>
                    </div>
                    <div class="mt30 row">
                        <aside class="col-12 col-md-3 col-xl-2 offset-xl-1 aside">
                            <ul class="list list--mypage-menu">
                                <li class="list__item"><a class="list__item__link" href="https://exhibitor.japangolffair.com/mypage">マイページ<i class="list__item__link__caret"></i></a></li>
                                <li class="list__item"><a class="list__item__link" href="https://exhibitor.japangolffair.com/mypage/companies/edit">会社情報管理<i class="list__item__link__caret"></i></a></li>
                                <li class="list__item"><a class="list__item__link" href="/mypage/entry/" style="background-color: green;">出展内容管理<i class="list__item__link__caret"></i></a></li>
                            </ul>
                        </aside>
                        <div class="col-12 col-md-9 col-xl-8 area area--mypage-main">
                            <ul class="list list--mypage-info">
                                <li class="list__item list__item--info-title">
                                    <h2 class="heading heading--info-title">お知らせ一覧</h2>
                                </li>
                                <li class="list__item">
                                    <span class="text text--info-item">【重要】JGF2024の出展申込は申込開始時期と申込方法が例年と若干異なる部分がございます。出展案内をご確認のうえお間違えの無いようお願いいたします。なお、マイページからのお申込みについては当マイページ内に申込開始のタイミングで表示される「出展申込管理」より必要事項をご入力のうえお申し込みください。</span>
                                    <span class="text text--info-date">2023/09/08</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pl20 pr20">
                            <a class="btn btn--logout" href="https://exhibitor.japangolffair.com/logout">ログアウト</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="area area--footer area--top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <img class="image" src="//www.japangolffair.com/image/logo-white.png" alt="Japan Golf Fair">
                        </div>
                    </div>
                </div>
            </div>
            <div class="area area--footer area--bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list list--footer justify-content-center">
                                <li class="list__item"><a class="list__item__link" href="https://exhibitor.japangolffair.com/inquiry/create">お問い合わせ</a></li>
                                <li class="list__item"><a class="list__item__link" href="https://exhibitor.japangolffair.com/policy">プライバシー<br>ポリシー</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="area area--footer area--copyright">© Japan Golf Goods Association. All Rights Reserved.</div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>