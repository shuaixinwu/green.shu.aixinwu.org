@extends('layout') @section('content')

<div class="swiper-container swiper-1">
    <div class="swiper-pagination"></div>
    <div class="swiper-wrapper">
        <img src="/images/t1.png" class="swiper-slide">
        <img src="/images/t2.png" class="swiper-slide">
        <img src="/images/t3.png" class="swiper-slide">
    </div>
</div>
@endsection @section('bar')
<div class="toolbar">
    <div class="toolbar-inner">
        <a href="/ranklist" class="external">查看碳排行</a>
        <a href="/login" class="external">一卡通登录</a>
    </div>
</div>
@endsection