<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>公司介绍_千金净雅品牌官方网站</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="/htdocs/style/style.css" rel="stylesheet" type="text/css" />
    <link href="/htdocs/images/favicon.ico" rel="icon" type="image/x-icon" />
    <script type="text/javascript" src="/htdocs/scripts/lib/jquery-1.0.2.min.js"></script>
    <script src="/htdocs/scripts/stepcarousel.js" type="text/javascript"></script>
    <script type="text/javascript">
    stepcarousel.setup({
        galleryid: 'mygallery', //id of carousel DIV
        beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
        panelclass: 'panel', //class of panel DIVs each holding content
        panelbehavior: {
            speed: 300,
            wraparound: false,
            persist: true
        },
        autostep: {
            enable: true,
            moveby: 1,
            pause: 10000
        },
        defaultbuttons: {
            enable: true,
            moveby: 1,
            leftnav: ['/htdocs/images/butt-left.gif', -60, 100],
            rightnav: ['/htdocs/images/butt-right.gif', 15, 100]
        },
        statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
        contenttype: ['inline'], //content setting ['inline'] or ['external', 'path_to_external_file']
        oninit: function() {
            isloaded = true
            document.getElementById('displaycssbelt').style.visibility = "visible";
            document.getElementById('stocklevels') && ( document.getElementById('stocklevels').style.visibility = "visible" );
        }
    })
    </script>
    <script src="/htdocs/scripts/lib/jquery.min.js"></script>
    <script src="/htdocs/scripts/lib/jquery.lazyload.min.js"></script>
    <script src="/htdocs/scripts/lib/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="/htdocs/style/common.css" type="text/css">
</head>

<body>
    <?= View::factory('inc/top_bar')->set('current_bar','company'); ?>
    <div class="clear"></div>
    <div id="banner5"></div>
    <div class="conj_tirel">
        <div class="conj_tirel_con">您当前的位置：<a href='/'>主页</a> > <a href='/a/gsjs/'>公司介绍</a> </div>
    </div>
    <div class="gsjj_title"><img src="/htdocs/images/gsjs.jpg" /></div>
    <div class="gsj_olpq">
        <!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;</dd>-->
        </p>
        <dl>
            <dt><img src="/htdocs/images/gsjj_imgh.jpg" /></dt>
            <dd style="line-height:38px;">
                 &nbsp;&nbsp;&nbsp;&nbsp;长沙浪千日用品贸易有限公司是湖南上市药企千金药业旗下湖南千金卫生用品股份有限公司授权经销商，推广并销售千金净雅系列妇科专用棉巾。经销商遍及全国22个省，4个直辖市，截止2017年3月，总人数达6000余人。公司在发展过程中培养了一支专业的微商团队，每月创造近百万的经济收益！公司设有：培训部，推广部，客服部，设计部，旨在为经销商能力提升提供完备的解决方案。
                <br/>
            </dd>
        </dl>
    </div>
    <div class="gsjj_title"><img src="/htdocs/images/gsjs6.jpg" /></div>
    <div id="mygallery" class="stepcarousel">
        <div class="belt" id="displaycssbelt">
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p1.jpg" />
                        <p>体验店开业</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p2.jpg" />
                        <p>微商大会</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p3.jpg" />
                        <p>签约仪式</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p4.jpg" />
                        <p>泰国游</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p1.jpg" />
                        <p>体验店开业</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p2.jpg" />
                        <p>微商大会</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p3.jpg" />
                        <p>签约仪式</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p4.jpg" />
                        <p>泰国游</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p1.jpg" />
                        <p>体验店开业</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p2.jpg" />
                        <p>微商大会</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p3.jpg" />
                        <p>签约仪式</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p4.jpg" />
                        <p>泰国游</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p1.jpg" />
                        <p>体验店开业</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p2.jpg" />
                        <p>微商大会</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul>
                    <li><img src="/htdocs/images/p3.jpg" />
                        <p>签约仪式</p>
                    </li>
                </ul>
            </div>
            <div class="panel" style="margin-top:20px;">
                <ul>
                    <li><img src="/htdocs/images/p4.jpg" />
                        <p>泰国游</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?= View::factory('inc/footer')?>

</body>

</html>
