@extends('layout') @section('content')


<div class="content-block-title">个人信息</div>
<div class="card">
    <div class="card-content">
        <div class="card-content-inner">
            <div class="row">
                <div class="col-20">姓名：</div>
                <div class="col-80">{{session('username')}}</div>
            </div>
            <div class="row">
                <div class="col-20">学号：</div>
                <div class="col-80">{{session('userid')}}</div>
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