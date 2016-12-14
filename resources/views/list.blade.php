@extends('layout') @section('content') @if($status=='0')
<p>{{$content}}</p>
@else @foreach($data as $record)
<div class="card">
    <div class="card-header">{{$record['starttime']}} ～ {{$record['endtime']}}</div>
    <div class="card-content">
        <div class="card-content-inner">
            <p>总计碳排放量：<span>{{$record['total']}}</span> kg</p>
            <p>日均碳排放量：<span>{{$record['totalday']}}</span> kg</p>
            <p>更新时间：{{$record['updatetime']}}</p>
        </div>
    </div>
    <div class="card-footer">
        <a href="#" class="link">查看详细</a>
    </div>
</div>
@endforeach @endif @endsection