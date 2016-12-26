@extends('layout1') @section('head')
<link rel="stylesheet" href="/src/Framework7 Keypad/dist/framework7.keypad.min.css"> @endsection @section('content')
<div class="content-block-title">开始日期</div>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-inner">
                    <div class="item-input">
                        <input type="text" placeholder="请选择开始日期" readonly id="starttime">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="content-block-title">结束日期</div>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-inner">
                    <div class="item-input">
                        <input type="text" placeholder="请选择结束日期" readonly id="endtime">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<p><a href="#" data-popup=".popup-about" class="open-popup">查看碳排放量表</a></p>

<div class="buttons-row">
    <a href="#tab1" class="tab-link active button">衣</a>
    <a href="#tab2" class="tab-link button">食</a>
    <a href="#tab3" class="tab-link button">住</a>
    <a href="#tab4" class="tab-link button">行</a>
</div>
<div class="tabs">
    <div id="tab1" class="tab active">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">购买衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y1" value="0" id="y1">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">洗衣机洗衣服（次）</div>
                            <div class="item-input">
                                <input type="text" name="y2" value="0" id="y2">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">手洗衣服（次）</div>
                            <div class="item-input">
                                <input type="text" name="y3" value="0" id="y3">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">熨衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y4" value="0" id="y4">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">干洗衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y5" value="0" id="y5">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">捐赠衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y6" value="0" id="y6">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">扔弃衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y7" value="0" id="y7">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="content-block total">衣----总计碳排放量：<span>0</span> kg</p>
        </div>
    </div>
    <div id="tab2" class="tab">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">食堂就餐（次）</div>
                            <div class="item-input">
                                <input type="text" name="s1" value="0" id="s1">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">外出就餐（次）</div>
                            <div class="item-input">
                                <input type="text" name="s2" value="0" id="s2">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">聚餐（次）</div>
                            <div class="item-input">
                                <input type="text" name="s3" value="0" id="s3">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">点外卖（次）</div>
                            <div class="item-input">
                                <input type="text" name="s4" value="0" id="s4">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">喝饮料（瓶）</div>
                            <div class="item-input">
                                <input type="text" name="s5" value="0" id="s5">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">外带饮品（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s6" value="0" id="s6">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用微波炉（次）</div>
                            <div class="item-input">
                                <input type="text" name="s7" value="0" id="s7">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用饮水机喝热水（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s8" value="0" id="s8">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用热水器喝热水（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s9" value="0" id="s9">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label"> 一次性杯（个）</div>
                            <div class="item-input">
                                <input type="text" name="s10" value="0" id="s10">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="content-block total">食----总计碳排放量：<span>0</span> kg</p>
        </div>
    </div>
    <div id="tab3" class="tab">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用电（度）</div>
                            <div class="item-input">
                                <input type="text" name="z1" value="0" id="z1">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">水瓶（个）</div>
                            <div class="item-input">
                                <input type="text" name="z2" value="0" id="z2">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">电池（节）</div>
                            <div class="item-input">
                                <input type="text" name="z3" value="0" id="z3">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">空调（小时）</div>
                            <div class="item-input">
                                <input type="text" name="z4" value="0" id="z4">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">洗热水澡（次）</div>
                            <div class="item-input">
                                <input type="text" name="z5" value="0" id="z5">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">垃圾袋（个）</div>
                            <div class="item-input">
                                <input type="text" name="z6" value="0" id="z6">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">再利用塑料袋（个）</div>
                            <div class="item-input">
                                <input type="text" name="z7" value="0" id="z7">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">纸张（张）</div>
                            <div class="item-input">
                                <input type="text" name="z8" value="0" id="z8">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">再利用纸张（张）</div>
                            <div class="item-input">
                                <input type="text" name="z9" value="0" id="z9">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">捐赠书（页）</div>
                            <div class="item-input">
                                <input type="text" name="z10" value="0" id="z10">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">回收塑料瓶/玻璃瓶（个）</div>
                            <div class="item-input">
                                <input type="text" name="z11" value="0" id="z11">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">回收纸箱（个）</div>
                            <div class="item-input">
                                <input type="text" name="z12" value="0" id="z12">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">领养/种植盆栽（个）</div>
                            <div class="item-input">
                                <input type="text" name="z13" value="0" id="z13">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="content-block total">住----总计碳排放量：<span>0</span> kg</p>
        </div>
    </div>
    <div id="tab4" class="tab">
        <div class="list-block">
            <ul>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">地铁（站）</div>
                            <div class="item-input">
                                <input type="text" name="x1" value="0" id="x1">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">公交（站）</div>
                            <div class="item-input">
                                <input type="text" name="x2" value="0" id="x2">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">步行（站）</div>
                            <div class="item-input">
                                <input type="text" name="x3" value="0" id="x3">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">电梯（层）</div>
                            <div class="item-input">
                                <input type="text" name="x4" value="0" id="x4">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">走楼梯（层）</div>
                            <div class="item-input">
                                <input type="text" name="x5" value="0" id="x5">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">打的（公里）</div>
                            <div class="item-input">
                                <input type="text" name="x6" value="0" id="x6">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <p class="content-block total">行----总计碳排放量：<span>0</span> kg</p>
        </div>
    </div>
</div>
<div class="content-block rmargin">
    <div class="content-block-inner">
        <p id="total">总计碳排放量：<span>0</span> kg</p>
        <p id="totalday">日均碳排放量：<span>0</span> kg</p>
    </div>
</div>
<div class="content-block">
    <a class=" button button-big button-round button-fill external" id="checkday">计算日均碳排放量</a>
</div>
<div class="content-block">
    <a class=" button button-big button-round button-fill external" id="submit">确认提交</a>
</div>
@endsection @section('body')
<div class="popup popup-about">
    <div class="content-block">
        <h3>碳排放量表(单位:kg)</h3>
        <p><a href="#" class="close-popup">关闭</a></p>
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
</div>
<input type="text" value="{{$endtime}}" hidden="hidden" id="stime">
<script>
    var monthNames = ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'];
    var dayNamesShort = ['周日', '周一', '周二', '周三', '周四', '周五', '周六'];
    var starttime = myApp.calendar({
        input: '#starttime',
        disabled: [{
            to: new Date($$('#stime').val())
        }, {
            from: new Date(Date('Y-m-d'))
        }],
        monthNames: monthNames,
        dayNamesShort: dayNamesShort,
    });

    $$('#starttime').change(function () {
        var endtime = myApp.calendar({
            input: '#endtime',
            disabled: [{
                to: new Date($$('#starttime').val())
            }, {
                from: new Date(Date('Y-m-d'))
            }],
            monthNames: monthNames,
            dayNamesShort: dayNamesShort,
        });
        endtime.setValue('');
    });
    var keynum = ['7', '10', '13', '6'];
    var keypad = {
        '0': [],
        '1': [],
        '2': [],
        '3': []
    };

    for (var i = 0; i < 4; i++) {
        for (var j = 0; j < keynum[i]; j++) {
            if (i == 0) {
                keypad[i][j] = '#y' + (j + 1);
            } else if (i == 1) {
                keypad[i][j] = '#s' + (j + 1);
            } else if (i == 2) {
                keypad[i][j] = '#z' + (j + 1);
            } else {
                keypad[i][j] = '#x' + (j + 1);
            }
            var myKeypad = myApp.keypad({
                input: keypad[i][j],
                dotButton: false
            });
        }
    }
    var kind = {
        '0': ['购买一件衣服', '洗衣机洗一次衣服', '手洗一次衣服', '熨一件衣服', '干洗一件衣服', '捐赠一件衣服', '扔弃一件衣服'],
        '1': ['食堂就餐一次', '外出就餐一次', '聚餐一次', '点一次外卖', '喝一瓶饮料', '外带一杯饮品', '用一次微波炉', '用饮水机喝一杯热水', '用热水器喝一杯热水', '用一个一次性杯'],
        '2': ['用一度电', '水瓶一个', '电池一节', '用一个小时空调', '洗热水澡', '用一个垃圾袋', '再利用一个塑料袋', '纸张一张', '再利用一张纸张', '捐赠一页书', '回收一个塑料瓶/玻璃瓶', '回收一个纸箱', '领养/种植一个盆栽'],
        '3': ['地铁一站', '公交一站', '步行一站', '坐电梯上下一层楼梯', '走一层楼梯', '打的一公里'],
    };
    var carbon = {
        '0': ['5.8', '0.06', '-0.014', '0.05', '0.05', '-3', '3'],
        '1': ['-0.2', '0.3', '3', '0.485', '0.05', '0.05', '0.082', '0.05', '-0.05', '0.011'],
        '2': ['0.96', '0.01', '0.05', '0.611', '0.42', '0.01', '-0.01', '0.013', '-0.013', '-0.013', '-0.01', '-0.1', '-2'],
        '3': ['0.074', '0.021', '-0.021', '0.022', '-0.02', '0.495']
    };

    for (var i = 0; i < 4; i++) {
        var scale = '';
        for (var j = 0; j < keynum[i]; j++) {
            scale = scale + "<li class = 'item-content'> <div class = 'item-inner'>  <div class = 'item-title'> " + kind[i][j] + " </div> <div class = 'item-after'>" + carbon[i][j] + "</div> </div></li>";
        }
        $$(".popup ul").eq(i).html(scale);
    }

    var tab = ['#tab1 input', '#tab2 input', '#tab3 input', '#tab4 input'];

    function countTotal(index) {
        var sum = 0;
        for (var i = 0; i < $$(tab[index]).length; i++) {
            sum += carbon[index][i] * $$(tab[index]).eq(i).val();
        }
        return sum;
    }

    function countTotals() {
        var sum = parseFloat($$('#tab1 .total span').text()) + parseFloat($$('#tab2 .total span').text()) + parseFloat($$('#tab3 .total span').text()) + parseFloat($$('#tab4 .total span').text());
        $$('#total span').html(sum.toFixed(3));
    }

    $$('#tab1 input').change(function () {
        $$('#tab1 .total span').html(countTotal(0).toFixed(3));
        countTotals();
    });
    $$('#tab2 input').change(function () {
        $$('#tab2 .total span').html(countTotal(1).toFixed(3));
        countTotals();
    });
    $$('#tab3 input').change(function () {
        $$('#tab3 .total span').html(countTotal(2).toFixed(3));
        countTotals();
    });
    $$('#tab4 input').change(function () {
        $$('#tab4 .total span').html(countTotal(3).toFixed(3));
        countTotals();
    });

    function listContent() {
        var content = '';
        for (var i = 0; i < $$('.tab input').length; i++) {
            content = content + $$('.tab input').eq(i).val();
            if (($$('.tab input').length - i) > 1) {
                content += ',';
            }
        }
        return content;
    }

    function getDays(strDateStart, strDateEnd) {
        var strSeparator = "-"; //日期分隔符
        var oDate1;
        var oDate2;
        var iDays;
        oDate1 = strDateStart.split(strSeparator);
        oDate2 = strDateEnd.split(strSeparator);
        var strDateS = new Date(oDate1[0] + "-" + oDate1[1] + "-" + oDate1[2]);
        var strDateE = new Date(oDate2[0] + "-" + oDate2[1] + "-" + oDate2[2]);
        iDays = parseInt(Math.abs(strDateS - strDateE) / 1000 / 60 / 60 / 24) //把相差的毫秒数转换为天数 
        return iDays + 1;
    }

    $$('#checkday').click(function () {
        var starttime = $$('#starttime').val();
        var endtime = $$('#endtime').val();
        var total = $$('#total span').text();
        if (starttime == '') {
            myApp.alert('尚未选定开始日期！', '友情提示');
        } else if (endtime == '') {
            myApp.alert('尚未选定结束日期！', '友情提示');
        } else if (total == '0' || total == '0.000') {
            myApp.alert('尚未填写碳排放内容！', '友情提示');
        } else {
            var total = $$('#total span').text();
            $$('#totalday span').html((total / getDays(starttime, endtime)).toFixed(3));
        }
    });

    $$('#submit').click(function () {
        var starttime = $$('#starttime').val();
        var endtime = $$('#endtime').val();
        var content = listContent();
        var total = $$('#total span').text();
        var totalday = $$('#totalday span').text();
        if (starttime == '') {
            myApp.alert('尚未选定开始日期！', '友情提示');
        } else if (endtime == '') {
            myApp.alert('尚未选定结束日期！', '友情提示');
        } else if (total == '0' || total == '0.000') {
            myApp.alert('尚未填写碳排放内容！', '友情提示');
        } else if (totalday == '0' || totalday == '0.000') {
            myApp.alert('尚未计算日均碳排放量！', '友情提示');
        } else if (totalday !== (total / getDays(starttime, endtime)).toFixed(3)) {
            myApp.alert('日均碳排放量与总碳排放量不吻合，请重新计算日均碳排放量！', '友情提示');
        } else {
            $$.post('/add', {
                'starttime': starttime,
                'endtime': endtime,
                'content': content,
                'total': total,
                'totalday': totalday
            }, function (response) {
                var response = eval('(' + response + ')');
                if (response['status'] == '1') {
                    myApp.alert(response['content'] + '，2秒后自动跳转！', '友情提示');
                    setTimeout("top.location.href = '/'", 2000);
                }
            });
        }

    });
</script>
@endsection