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
            {{-- <iframe src="https://maps.app.goo.gl/xzFBJWJzvwRM9L8A6" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.3187664078118!2d139.70214997715243!3d35.670228498760295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cbac9b52cff%3A0x560d87a8e2d1d3d2!2z5Y6f5a6_6aeF!5e0!3m2!1sja!2sjp!4v1571819367477!5m2!1sja!2sjp"  height="250"   allowfullscreen=""></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.836551473939!2d139.7477714269531!3d35.70563960000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c4782eed4f3%3A0x5058b288249e640e!2z5p2x5Lqs44OJ44O844Og!5e0!3m2!1sja!2sjp!4v1701513094034!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <li><a href="#products1">商品のご紹介</a></li>
                    <li><a href="#shop">店舗のご案内</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">&copy; SOUSAKU</p>
    </footer>

@endsection
