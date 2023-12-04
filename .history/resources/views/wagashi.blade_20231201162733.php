@extends('layouts.main')

@section('title', 'wagashi')
    
@section('content')
    <header id="header">
        <h1 class="site-title">創作</h1>
        <nav>
            <ul>
                <li>お知らせ</li>
                <li>商品のご紹介</li>
                <li>店舗のご案内</li>
            </ul>
        </nav>
        <div class="btn"><a href="#" rel="noopener no referrer">オンラインストアで見る</a></div>
    </header>

    <main>
        <section id="news">
            News
            <h2 class="sec-title">お知らせ</h2>
            <dl>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
                <dt>2021.01.01</dt><dd>タイトルタイトルタイトル</dd>
            </dl>
        </section>
        <section id="products1">
            <h2 class="site-title">新しい価値の創造</h2>
            <p>Create New Values</p>
            <div class="img"><img src="img/products1.jpg" alt=""></div>
            <div class="yellow">テキストテキストテキストテキストテキスト</div>
        </section>
        <section id="products2">
            <h2 class="sec-title">科学と技術の調和</h2>
            <p>Science & Technology</p>
            <div class="img"><img src="img/products2.jpg" alt=""></div>
            <div class="brown"></div>
        </section>
    </main>

    <footer id="footer"></footer>
@endsection
