<?= View::factory('inc/header')->set('title', '产品中心_千金净雅品牌官方网站');?>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

    <body>
        <?= View::factory('inc/top_bar')->set('current_bar','contact'); ?>
            <div class="clear"></div>
            <div id="banner3"></div>
            <div class="conj_tirel">
                <div class="conj_tirel_con">您当前的位置：<a href='http://127.0.0.1/'>主页</a> > <a href='/a/lxwm/'>联系我们</a> </div>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs4.jpg" /></div>
            <div class="weizhi" style=" margin-top:40px;">
                <ul>
                    <li class="ul1">地址
                        <p>长沙市岳麓区恒大御景湾</p>
                    </li>
                    <li class="ul2">联系电话
                        <p>4000-600-479,0731-88856927</p>
                    </li>
                    <li class="ul3">邮箱
                        <p>1400600479@qq.com</p>
                    </li>
                </ul>
            </div>
            <script language="javascript" type="text/javascript">
            function check() {
                var re = /[\u4E00-\u9FA5]/g;
                var istel = /^[1][3578][0-9]{9}/;
                if (document.forma.mz.value == '') {
                    alert('请填写姓名！');
                    return false;
                } else
                if (!re.test(forma.mz.value)) {
                    alert('请填写中文姓名！');
                    return false;
                } else

                if (!istel.test(forma.dh.value)) {
                    alert("请正确填写电话号码");
                    return false;
                } else if (document.forma.dh.value == "") {
                    alert("请填入您的联系方式");
                    document.forma.dh.focus();
                    return false;
                }

                $.get('/contact/save.json?' + $('#forma').serialize()).done(function(ret) {
                    if(parseInt(ret) === 1){
                        alert('您已成功申请，稍后我司工作人员会电话联系您');
                        $('[name=reset]').click();    
                    }
                    
                });

                return true;
            }

            function ReturnUrl() {
                var value = window.location.href;
                return value;
            }
            </script>
            <div class="liuy">
                <form action="javascript:;" enctype="multipart/form-data" method="post" id="forma" name="forma" onSubmit="javascript:return check();">
                    <input type="hidden" name="action" value="post" />
                    <input type="hidden" name="diyid" value="1" />
                    <input type="hidden" name="do" value="2" />
                    <div class="liuy_eft">
                        <ul>
                            <li>
                                <ol>
                                    <strong style="color:#F00;">*</strong>您的姓名：
                                </ol><span><input name='mz' id='mz' type="text" class="wenbn"/></span></li>
                            <li>
                                <ol>
                                    <strong style="color:#F00;">*</strong>联系电话：
                                </ol><span><input name='dh' id='dh' type="text" class="wenbn"/></span></li>
                            <li>
                                <ol>E-mail：
                                </ol><span><input name='yj' id='yj' type="text" class="wenbn"/></span></li>
                        </ul>
                    </div>
                    <div class="liuy_right">
                        <div class="liu_u">
                            <ol>留言：</ol><span><textarea name='ly' id='ly' cols="" rows="" class="wen_qy"></textarea></span></div>
                        <input type="hidden" name="dede_fields" value="mz,text;dh,text;yj,text;ly,text" />
                        <input type="hidden" name="dede_fieldshash" value="194154ef63ee10d11210e1d9bfce383a" />
                        <div class="an_li">
                            <ul>
                                <li>
                                    <input name="submit" type="submit" value=" " class="anz" />
                                </li>
                                <li>
                                    <input name="reset" type="reset" value=" " class="anz1" />
                                </li>
                                <ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ditu">
                <div style="width:1200px;height:417px;border:#ccc solid 1px;" id="dituContent"></div>
                <script type="text/javascript">
                //创建和初始化地图函数：
                function initMap() {
                    createMap(); //创建地图
                    setMapEvent(); //设置地图事件
                    addMapControl(); //向地图添加控件
                    addMarker(); //向地图中添加marker
                }

                //创建地图函数：
                function createMap() {
                    var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
                    var point = new BMap.Point(112.966075, 28.242587); //定义一个中心点坐标
                    map.centerAndZoom(point, 18); //设定地图的中心点和坐标并将地图显示在地图容器中
                    window.map = map; //将map变量存储在全局
                }

                //地图事件设置函数：
                function setMapEvent() {
                    map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
                    map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
                    map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
                    map.enableKeyboard(); //启用键盘上下左右键移动地图
                }

                //地图控件添加函数：
                function addMapControl() {
                    //向地图中添加缩放控件
                    var ctrl_nav = new BMap.NavigationControl({
                        anchor: BMAP_ANCHOR_TOP_LEFT,
                        type: BMAP_NAVIGATION_CONTROL_LARGE
                    });
                    map.addControl(ctrl_nav);
                    //向地图中添加缩略图控件
                    var ctrl_ove = new BMap.OverviewMapControl({
                        anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
                        isOpen: 1
                    });
                    map.addControl(ctrl_ove);
                    //向地图中添加比例尺控件
                    var ctrl_sca = new BMap.ScaleControl({
                        anchor: BMAP_ANCHOR_BOTTOM_LEFT
                    });
                    map.addControl(ctrl_sca);
                }

                //标注点数组
                var markerArr = [{
                    title: "长沙浪千日用品贸易有限公司",
                    content: "长沙市岳麓区观沙岭街道<br/>电话：4000-600-479",
                    point: "112.96537|28.243001",
                    isOpen: 1,
                    icon: {
                        w: 21,
                        h: 21,
                        l: 0,
                        t: 0,
                        x: 6,
                        lb: 5
                    }
                }];
                //创建marker
                function addMarker() {
                    for (var i = 0; i < markerArr.length; i++) {
                        var json = markerArr[i];
                        var p0 = json.point.split("|")[0];
                        var p1 = json.point.split("|")[1];
                        var point = new BMap.Point(p0, p1);
                        var iconImg = createIcon(json.icon);
                        var marker = new BMap.Marker(point, {
                            icon: iconImg
                        });
                        var iw = createInfoWindow(i);
                        var label = new BMap.Label(json.title, {
                            "offset": new BMap.Size(json.icon.lb - json.icon.x + 10, -20)
                        });
                        marker.setLabel(label);
                        map.addOverlay(marker);
                        label.setStyle({
                            borderColor: "#808080",
                            color: "#333",
                            cursor: "pointer"
                        });

                        (function() {
                            var index = i;
                            var _iw = createInfoWindow(i);
                            var _marker = marker;
                            _marker.addEventListener("click", function() {
                                this.openInfoWindow(_iw);
                            });
                            _iw.addEventListener("open", function() {
                                _marker.getLabel().hide();
                            })
                            _iw.addEventListener("close", function() {
                                _marker.getLabel().show();
                            })
                            label.addEventListener("click", function() {
                                _marker.openInfoWindow(_iw);
                            })
                            if (!!json.isOpen) {
                                label.hide();
                                _marker.openInfoWindow(_iw);
                            }
                        })()
                    }
                }
                //创建InfoWindow
                function createInfoWindow(i) {
                    var json = markerArr[i];
                    var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>" + json.content + "</div>");
                    return iw;
                }
                //创建一个Icon
                function createIcon(json) {
                    var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w, json.h), {
                        imageOffset: new BMap.Size(-json.l, -json.t),
                        infoWindowOffset: new BMap.Size(json.lb + 5, 1),
                        offset: new BMap.Size(json.x, json.h)
                    })
                    return icon;
                }

                initMap(); //创建和初始化地图
                </script>
            </div>
            <?= View::factory('inc/footer')?>
    </body>

    </html>
