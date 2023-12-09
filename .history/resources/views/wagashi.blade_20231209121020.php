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

        <div class="onlinestore">
            <a href="#" target="_blank" rel="noopener noreferrer">オンラインストアで見る</a>
        </div>
    </header>

    <main>
        <section id="news">
            <div class="wrapper">
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
            </div>
        </section>

        <section id="products1">
            <div class="wrapper products">
                <h2 class="sec-title">
                    <span class="ja">新しい価値の創造</span>
                    <span class="en">Create New values</span>
                </h2>
                <div class="img">
                    <img src="img/products1.jpg" alt="">
                    <p class="text">テキストテキストテキスト</p>
                </div>
            </div>
        </section>

        <section id="products2">
            <div class="wrapper products">
                <h2 class="sec-title">
                    <span class="ja">科学と技術の調和</span>
                    <span class="en">Science & Technology</span>
                </h2>
                <div class="img">
                    <img src="img/products2.jpg" alt="">
                    <p class="text">テキストテキストテキスト</p>
                </div>
            </div>
        </section>

        <div id="shop">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.6566078781802!2d139.80812547512744!3d35.710067028390604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ed0d12f9adf%3A0x7d1d4fb31f43f72a!2z5p2x5Lqs44K544Kr44Kk44OE44Oq44O8!5e0!3m2!1sja!2sjp!4v1702090119178!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" width="100%"></iframe>
        </div>
    </main>

    <footer id="footer">
        <div class="flex">
            <div class="left">
                <p><a href="#">オンラインストアで見る</a> | <a href="#">お問い合わせ</a></p>
            </div>
            <div class="right">
                <div class="logo"><img src="img/logo.svg" alt=""></div>
                <p class="info">
                    〒06-0032...<br>
                    電話: <a href="tel:03///"></a></p>
                <ul class="menu">
                    <li><a href="#news">お知らせ</a></li>
                    <li><a href="#products">商品のご紹介</a></li>
                    <li><a href="#shop">店舗のご案内</a></li>
                </ul>
            </div>
        </div>
        <p class="cpright">&copy; SOUSAKU</p>
    </footer>
@endsection
