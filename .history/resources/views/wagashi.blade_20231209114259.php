@extends('layouts.main')

@section('title', 'wagashi')

@section('content')
    <header id="header">
        <img src="img/logo.svg" alt="">
        <nav>
            <ul>
                <li><a href="#news">お知らせ</a></li>
                <li><a href="#products">商品のご紹介<</a></li>
                <li><a href="#shop">店舗のご案内</a></li>
            </ul>
        </nav>

        <div class="onlinestore">
            <a href="#">オンラインストアで見る</a>
        </div>
    </header>
    <main>
        <section id="news">
            <div class="wrapper">
                <h2 class="sec-title">
                    <span class="en">News</span>
                    <span class="ja">お知らせ</span>
                </h2>
                <dl>
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
            <div></div>
        </section>
    </main>

    <footer id="footer">
    
    </footer>
@endsection
