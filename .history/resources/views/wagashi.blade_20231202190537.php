@extends('layouts.main')

@section('title', 'wagashi')

@section('content')
    <header id="header">
        <h1 class="site-title"><a href="#"><img src="img/logo.svg" alt=""></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="#news">お知らせ</a></li>
                <li><a href="#products1">商品のご紹介</a></li>
                <li><a href="#shop">店舗のご案内</a></li>
            </ul>
        </nav>
        <div class="onlinestore"><a href="#" target="_blank" rel="noopener noreferrer">オンラインストアで見る</a></div>
    </header>

    <main>
        <section id="news" class="wrapper">

            <h2 class="sec-title">
                <span class="en">News</span>
                <span class="ja">お知らせ</span>
            </h2>

            <dl class="list">
                <dt>2021.01.01</dt>
                <dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt>
                <dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt>
                <dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt>
                <dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt>
                <dd>タイトルタイトルタイトル</dd>
            </dl>
        </section>

        <section id="products1" class="wrapper">
            <h2 class="site-title">
                <span class="ja">新しい価値の創造</span>
                <span class="en">Create New Values</span>
            </h2>

            <div class="img">
                <img src="img/products1.jpg" alt="">
                <p class="text">テキストテキスト<br>テキストテキスト</p>
            </div>
        </section>

        <section id="products2" class="wrapper">
            <h2 class="sec-title">
                <span class="ja">科学と技術の調和</span>
                <span class="en">Science & Technology</span>
            </h2>
            <div class="img">
                <img src="img/products2.jpg" alt="">
                <p class="text">テキストテキスト<br>テキストテキスト</p>
            </div>
        </section>

        <div id="shop">
            <iframe src="" frameborder="0"></iframe>
        </div>

    </main>

    <footer id="footer">

        <div class="inner">
            <div class="left">
                <p><a href="#" target="_blank">オンラインストアで見る</a> | <a href="mailto:xxxx@gmail.com">お問い合わせ</a></p>
            </div>
            <div class="right">
                <div class="logo"><img src="img/logo.svg" alt=""></div>
                <p class="info">
                    〒106-0032 東京都港区六本木5丁目××××<br>
                    電話..<a href="tel:03-XXXX-XXXX">03-XXXX-XXXX</a>
                </p>
                <ul class="menu">
                    <li><a href="#news">お知らせ</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>


        <div class="flex">
            <div>オンラインストアで見る | お問い合わせ</div>
            <div class="nav">
                <h1 class="site-title">創作</h1>
                <p>〒106-0032 東京都港区六本木5丁目××××</p>
                <p>電話..03-XXXX-XXXX</p>
                <nav>
                    <ul>
                        <li>お知らせ</li>
                        <li>商品のご紹介</li>
                        <li>店舗のご案内</li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

@endsection
