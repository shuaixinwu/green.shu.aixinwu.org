@extends('layout') @section('content')
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
                                <input type="text" name="y1" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">洗衣机洗衣服（次）</div>
                            <div class="item-input">
                                <input type="text" name="y2" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">手洗衣服（次）</div>
                            <div class="item-input">
                                <input type="text" name="y3" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">熨衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y4" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">干洗衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y5" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">捐赠衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y6" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">扔弃衣服（件）</div>
                            <div class="item-input">
                                <input type="text" name="y7" value="0">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
                                <input type="text" name="s1" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">外出就餐（次）</div>
                            <div class="item-input">
                                <input type="text" name="s2" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">聚餐（次）</div>
                            <div class="item-input">
                                <input type="text" name="s3" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">点外卖（次）</div>
                            <div class="item-input">
                                <input type="text" name="s4" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">喝饮料（瓶）</div>
                            <div class="item-input">
                                <input type="text" name="s5" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">外带饮品（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s6" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用微波炉（次）</div>
                            <div class="item-input">
                                <input type="text" name="s7" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用饮水机喝热水（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s8" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">用热水器喝热水（杯）</div>
                            <div class="item-input">
                                <input type="text" name="s9" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label"> 一次性杯（个）</div>
                            <div class="item-input">
                                <input type="text" name="s10" value="0">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
                                <input type="text" name="z1" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">水瓶（个）</div>
                            <div class="item-input">
                                <input type="text" name="z2" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">电池（节）</div>
                            <div class="item-input">
                                <input type="text" name="z3" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">空调（小时）</div>
                            <div class="item-input">
                                <input type="text" name="z4" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">洗热水澡（次）</div>
                            <div class="item-input">
                                <input type="text" name="z5" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">垃圾袋（个）</div>
                            <div class="item-input">
                                <input type="text" name="z6" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">再利用塑料袋（个）</div>
                            <div class="item-input">
                                <input type="text" name="z7" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">纸张（张）</div>
                            <div class="item-input">
                                <input type="text" name="z8" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">再利用纸张（张）</div>
                            <div class="item-input">
                                <input type="text" name="z9" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">捐赠书（页）</div>
                            <div class="item-input">
                                <input type="text" name="z10" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">回收塑料瓶/玻璃瓶（个）</div>
                            <div class="item-input">
                                <input type="text" name="z11" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">回收纸箱（个）</div>
                            <div class="item-input">
                                <input type="text" name="z12" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">领养/种植盆栽（个）</div>
                            <div class="item-input">
                                <input type="text" name="z13" value="0">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
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
                                <input type="text" name="x1" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">公交（站）</div>
                            <div class="item-input">
                                <input type="text" name="x2" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">步行（站）</div>
                            <div class="item-input">
                                <input type="text" name="x3" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">电梯（层）</div>
                            <div class="item-input">
                                <input type="text" name="x4" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">走楼梯（层）</div>
                            <div class="item-input">
                                <input type="text" name="x5" value="0">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-content">
                        <div class="item-inner">
                            <div class="item-title label">打的（公里）</div>
                            <div class="item-input">
                                <input type="text" name="x6" value="0">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection @section('body')
<div class="popup popup-about">
    <div class="content-block">
        <h3>碳排放量表</h3>
        <p><a href="#" class="close-popup">关闭</a></p>
        <p>Lorem ipsum dolor ...</p>
    </div>
</div>
<script>
    var monthNames = ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'];
    var dayNamesShort = ['周日', '周一', '周二', '周三', '周四', '周五', '周六'];
    var starttime = myApp.calendar({
        input: '#starttime',
        disabled: {
            to: new Date(2016, 11, 1)
        },
        monthNames: monthNames,
        dayNamesShort: dayNamesShort,
    });
    var endtime = myApp.calendar({
        input: '#endtime',
        disabled: {
            to: new Date(2016, 11, 1)
        },
        monthNames: monthNames,
        dayNamesShort: dayNamesShort,
    });
</script>
@endsection