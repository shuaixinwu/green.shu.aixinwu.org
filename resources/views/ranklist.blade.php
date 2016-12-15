@extends('layout1') @section('content')
<div class="content-block ranklist">
    <h3>排行榜</h3>
    <ol>
        @foreach($data as $record)
        <li>
            <p>{{$record['greennum']}}</p>
            <p>{{$record['username']}}</p>
            <p>{{$record['userid']}}</p>
        </li>
        @endforeach

    </ol>
</div>
@endsection