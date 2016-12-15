@extends('layout1')@section('content') @if($status==1)
<div class="detail content-block">
    <h3>{{$starttime}} ~ {{$endtime}}碳排放量<br>(单位:kg)</h3>
    <h3>总碳排放量：{{$total}} kg<br>日均碳排放量：{{$totalday}} kg</h3>
    <div class="content-block-title">衣</div>
    <div class="list-block">
        <ul> </ul>
    </div>
    <div class="content-block-title">食</div>
    <div class="list-block">
        <ul> </ul>
    </div>
    <div class="content-block-title">住</div>
    <div class="list-block">
        <ul> </ul>
    </div>
    <div class="content-block-title">行</div>
    <div class="list-block">
        <ul> </ul>
    </div>
</div>
<input type="text" hidden="hidden" value="{{$data}}" id="data"> @endsection @section('body')
<script>
    var keynum = ['7', '10', '13', '6'];
    var kind = {
        '0': ['购买一件衣服', '洗衣机洗一次衣服', '手洗一次衣服', '熨一件衣服', '干洗一件衣服', '捐赠一件衣服', '扔弃一件衣服'],
        '1': ['食堂就餐一次', '外出就餐一次', '聚餐一次', '点一次外卖', '喝一瓶饮料', '外带一杯饮品', '用一次微波炉', '用饮水机喝一杯热水', '用热水器喝一杯热水', '用一个一次性杯'],
        '2': ['用一度电', '水瓶一个', '电池一节', '用一个小时空调', '洗热水澡', '用一个垃圾袋', '再利用一个塑料袋', '纸张一张', '再利用一张纸张', '捐赠一页书', '回收一个塑料瓶/玻璃瓶', '回收一个纸箱', '领养/种植一个盆栽'],
        '3': ['地铁一站', '公交一站', '步行一站', '坐电梯上下一层楼梯', '走一层楼梯', '打的一公里'],
    };
    var carbon = {
        '0': ['6.4', '2', '0.72', '0.02', '2', '-3', '3'],
        '1': ['1', '2', '5', '3', '0.5', '1', '0.1', '0.01', '-0.01', '0.01'],
        '2': ['0.96', '0.01', '0.05', '0.621', '0.42', '0.01', '-0.01', '0.004', '-0.004', '-0.004', '-0.01', '0.1', '-2'],
        '3': ['0.02', '0.02', '-0.02', '0.2', '0.02', '0.08']
    };
    data = $$('#data').val();
    var datas = new Array();
    datas = data.split(",");
    for (var i = 0; i < 4; i++) {
        var scale = '';
        for (var j = 0; j < keynum[i]; j++) {
            scale = scale + "<li class = 'item-content'> <div class = 'item-inner'>  <div class = 'item-title'> " + kind[i][j] + " </div> <div class = 'item-after'>";
            var num = 0;
            if (i == 0) {
                num = j;
            } else if (i == 1) {
                num = parseInt(keynum[0]) + j;
            } else if (i == 2) {
                num = parseInt(keynum[0]) + parseInt(keynum[1]) + j;
            } else {
                num = parseInt(keynum[0]) + parseInt(keynum[1]) + parseInt(keynum[2]) + j;
            }
            scale = scale + datas[num] * carbon[i][j] + "</div> </div></li>";
        }
        $$(".list-block ul").eq(i).html(scale);
    }
</script>
@endsection @else
<p>{{$content}}</p>
@endif