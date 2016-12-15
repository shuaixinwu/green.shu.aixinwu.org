@extends('layout') @section('content')


<div class="content-block-title">个人信息</div>
<div class="card">
    <div class="card-content">
        <div class="card-content-inner">
            <div class="row no-gutter">
                <div class="col-20">姓名：</div>
                <div class="col-80">{{session('username')}}</div>
            </div>
            <div class="row no-gutter">
                <div class="col-20">学号：</div>
                <div class="col-80">{{session('userid')}}</div>
            </div>
            <div class="row no-gutter">
                <div class="col-20">学院：</div>
                <div class="col-80">{{$data['college']}}</div>
            </div>
            <div class="row no-gutter">
                <div class="col-20">楼幢：</div>
                <div class="col-80">{{$data['building']}}</div>
            </div>
            <div class="row no-gutter">
                <div class="col-25">寝室号：</div>
                <div class="col-75">{{$data['room']}}</div>
            </div>
            <div class="row no-gutter">
                <div class="col-40">日均碳排放量：</div>
                <div class="col-60">{{$data['greennum']}} kg</div>
            </div>
        </div>
    </div>
</div>
<div class=" theme-blue content-block">
    <a href="/complete" class="button button-big button-round button-fill external">修改信息</a>
</div>
<div class=" theme-blue content-block">
    <a href="/ranklist" class="button button-big button-round button-fill external">查看排行榜</a>
</div>
<div class=" theme-blue content-block">
    <a href="/add" class="button button-big button-round button-fill external">新增记录</a>
</div>
<div class=" theme-blue content-block">
    <a href="/list" class="button button-big button-round button-fill external">查看记录</a>
</div>
<div class=" theme-red content-block">
    <a href="/logout" class="button button-big button-round button-fill external">注销登录</a>
</div>
</div>
</div>
</div>
@endsection