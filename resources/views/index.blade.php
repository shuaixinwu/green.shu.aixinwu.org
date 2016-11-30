@extends('layout') @section('content')


<div class="content-block-title">个人信息</div>
<div class="card">
    <div class="card-content">
        <div class="card-content-inner">
            <div class="row">
                <div class="col-30">姓名：</div>
                <div class="col-70">{{session('username')}}</div>
            </div>
            <div class="row">
                <div class="col-30">学号：</div>
                <div class="col-70">{{session('userid')}}</div>
            </div>
            <div class="row">
                <div class="col-30">学院：</div>
                <div class="col-70">{{$data['college']}}</div>
            </div>
            <div class="row">
                <div class="col-30">楼幢：</div>
                <div class="col-70">{{$data['building']}}</div>
            </div>
            <div class="row">
                <div class="col-30">寝室号：</div>
                <div class="col-70">{{$data['room']}}</div>
            </div>
            <div class="row">
                <div class="col-30">每天碳排放量：</div>
                <div class="col-70">{{$data['greennum']}}</div>
            </div>
        </div>
    </div>
</div>
<div class=" theme-red content-block">
    <a href="/logout" class="button button-big button-round button-fill external">注销登录</a>
</div>

</div>
</div>
</div>
@endsection