@extends('layout')@section('content')

<div class="content-block-title">学院</div>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-inner">
                    <div class="item-input">
                        <input type="text" placeholder="请选择学院" readonly id="college">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="content-block-title">楼幢号</div>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-inner">
                    <div class="item-input">
                        <input type="text" placeholder="请选择楼幢号" readonly id="building">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="content-block-title">寝室号</div>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-inner">
                    <div class="item-input">
                        <input type="text" placeholder="请填写寝室号" id="room" readonly>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<a class="button button-big button-round button-fill external" id="submit">确认提交</a> @endsection @section('body')
<script>
    var pickerCollege = myApp.picker({
        input: '#college',
        cols: [
            {
                textAlign: 'center',
                values: ['上海电影学院', '生命科学学院', '经济学院', '国际工商与管理学院', '机电工程与自动化学院', '音乐学院', '社区学院', '外国语学院', '理学院', '计算机工程与科学学院', '环境与化学工程学院', '文学院', '房地产学院', '公共管理系', '高等技术学院', '社会科学学院', '钱伟长学院', '管理学院', '图书情报档案系', '巴士汽车学院', '法学院', '悉尼工商学院', '成人教育学院', '土木工程系', '美术学院', '中欧工程技术学院', '通信与信息工程学院', '社会学院', '材料科学与工程学院', '数码艺术学院']
        }
    ]
    });
    var building = {
        新校区: ['南区01', '南区02', '南区03', '南区04', '南区05', '南区06', '南区07', '南区08', '南区09', '南区10', '南区11', '南区12', '南区14', '校内1号', '校内2号', '校内3号', '校内4号', '校内5号', '校内I1', '校内I2', '校内I3', '校内I4', '校内K1', '校内K2', '校内K3', '校内L1', '校内L2', '校内L3', '校内L4', '校内M', '校内N', '校内O1', '校内O2', '校内O3', '校内O4', '校内T1', '校内T2', '校内U1', '校内U2', '校内X1', '校内X2', '校内Y1', '校内Y2', '新世纪02', '新世纪03', '新世纪04', '新世纪05', '新世纪06', '新世纪07', '新世纪08', '新世纪09', '新世纪10', '新世纪11', '新世纪12', '新世纪13', '新世纪14', '新世纪15', '新世纪16', '新世纪17', '新世纪18', '新世纪19', '新世纪20', '新世纪21', '新世纪22北', '新世纪22南', '新世纪23', '新世纪24', '新世纪25', '新世纪26', '新世纪27', '新世纪28', '新世纪29', '新世纪30', '新世纪31', '新世纪32', '新世纪33', '新世纪34', '新世纪35', '新世纪36', '新世纪37', '新世纪38', '新世纪39', '新世纪40', '新世纪41'],
        延长校区: ['东部M1', '东部M2', '东部M3', '东部M4', '东部M5', '东部M6', '东部M7', '广中路G2', '广中路G3', '西部A1', '西部A2', '西部B1', '西部B2', '西部C1', '西部C2', '西部C3', '西部C4', '西部W4', '西部W5'],
        嘉定校区: ['校内01', '校内02', '校内03', '校内04', '校内05', '校内06', '校内07', '校内08', '校内09', '校内C', '校内D', '校内E', '校内F']
    };
    var pickerBuilding = myApp.picker({
        input: '#building',
        rotateEffect: true,
        formatValue: function (picker, values) {
            return values[1];
        },
        cols: [
            {
                textAlign: 'left',
                values: ['新校区', '延长校区', '嘉定校区'],
                onChange: function (picker, country) {
                    if (picker.cols[1].replaceValues) {
                        picker.cols[1].replaceValues(building[country]);
                    }
                }
        },
            {
                values: building.新校区,
                width: 160,
        },
    ]
    });
    var pickerRoom = myApp.picker({
        input: '#room',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'left',
                values: ('1 2 3 4 5 6 7 8 9 10 11 12').split(' ')
        },
            {
                values: ('01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34').split(' ')
        },
    ]
    });
    $$('#submit').click(function () {

        if (pickerCollege.cols['length'] == 0 || pickerBuilding.cols['length'] == 0 || pickerRoom.cols['length'] == 0) {
            myApp.alert('信息未填写完整!','友情提醒');
        } else {
            var college = pickerCollege.cols[0].value;
            var building = pickerBuilding.cols[0].value + pickerBuilding.cols[1].value;
            var room = pickerRoom.cols[0].value + pickerRoom.cols[1].value;
            $$.post('/complete', {
                college: college,
                building: building,
                room: room
            }, function (data) {
                var data = eval('(' + data + ')');
                if (data['status'] == 0) {
                    myApp.alert('信息有误,请重新填写!','友情提醒');
                } else {
                    window.location.href = "/";
                }
            });
        }

    });
</script>
@endsection