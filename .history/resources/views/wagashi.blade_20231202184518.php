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
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
            </dl>
        </section>

        <section id="products1" class="wrapper">
            <h2 class="site-title">
                <span class="ja">新しい価値の創造</span>
                <span class="en"></span>
            </h2>
            <p>Create New Values</p>
            <div class="img"><img src="img/products1.jpg" alt=""></div>
            <div class="yellow">テキストテキストテキストテキストテキスト</div>
        </section>
        <section id="products2">
            <h2 class="sec-title">科学と技術の調和</h2>
            <p>Science & Technology</p>
            <div class="img"><img src="img/products2.jpg" alt=""></div>
            <div class="brown">テキストテキストテキストテキストテキスト</div>
        </section>
        <div class="map">
            map
        </div>
    </main>

    <footer id="footer">
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
