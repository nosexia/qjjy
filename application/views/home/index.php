<?= View::factory('inc/header')->set('title', '千金净雅品牌官方网站__千金净雅卫生巾_千金净雅产妇包_国内首个医学级卫生巾');?>

    <body>
        <?= View::factory('inc/top_bar')->set('current_bar','home'); ?>
            <div class="clear"></div>
            <div id="solid">
                <ul>
                    <li class="solid0"></li>
                    <li class="solid1"></li>
                </ul>
                <div id="btt"><span></span> <span></span></div>
            </div>
            <script src="/htdocs/scripts/fordboy.js"></script>
            <div class="clear"></div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs.jpg" /></div>
            <div class="gsjj_con">
                <dl>
                    <dt><img src="/htdocs/images/gsjs.jpg" alt="千金药业" /></dt>
                    <dd> 长沙浪千日用品贸易有限公司是湖南上市药企千金药业旗下湖南千金卫生用品股份有限公司授权经销商，推广并销售千金净雅系列妇科专用棉巾。经销商遍及全国22个省，4个直辖市，截止2017年3月，总人数达6000余人。公司在发展过程中培养了一支专业的微商团队，每月创造近百万的经济收益！公司设有：培训部，推广部，客服部，设计部，旨在为经销商能力提升提供完备的解决方案。
                    </dd>
                </dl>
            </div>
            <div class="diji">
                <a href="/a/gsjs/"><img src="/htdocs/images/gsjs.jpg" border="0" /></a>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs1.jpg" /></div>
            <div class="lin_list">
                <ul>
                    <li>
                        <a href="/product/index"><img src="/htdocs/images/pic_03.jpg" border="0" alt="千金净雅卫生巾" /></a>
                    </li>
                    <li>
                        <a href="/product/index"><img src="/htdocs/images/pic_05.jpg" border="0" alt="千金净雅卫生巾" /></a>
                    </li>
                    <li>
                        <a href="/product/index"><img src="/htdocs/images/pic_07.jpg" border="0" alt="千金净雅卫生巾" /></a>
                    </li>
                    <li>
                        <a href="/product/index"><img src="/htdocs/images/pic_09.jpg" border="0" alt="千金净雅产妇包" /></a>
                    </li>
                </ul>
            </div>
            <div class="diji">
                <a href="/product/index"><img src="/htdocs/images/anji.jpg" border="0" /></a>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs2.jpg" /></div>
            <div class="con_pl">
                <?php foreach ($view_data['news_list'] as $key => $value) :?>
                    <?php if($key ===0):?>
                        <div class="xwzhong" style="float: left">
                    <?php elseif($key ===2):?>
                        <div class="xwzhong" style="float:right;">
                    <?php endif;?>
                            <dl>
                                <dt><img src="<?=$value['news_image_url']?>" border='0' width='152' height='150' /></dt>
                                <dd><a href="/news/detail/<?=$value['news_id']?>.html"><?=$value['news_title']?></a>
                                    <p><?=$value['news_content']?></p>
                                    <p><?=$value['create_time']?></p>
                                </dd>
                            </dl>    
                    <?php if($key ===1 || $key ===3):?>                    
                        </div>
                    <?php endif;?>
                <?php endforeach;?>
            </div>
            <div class="diji">
                <a href="/news/index/1.html"><img src="/htdocs/images/anji.jpg" border="0" /></a>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs3.jpg" /></div>
            <div class="baiwen_ko">
                <?php foreach ($view_data['answer_list'] as $key => $value) :?>
                <dl>
                    <dt><img src="<?$value['image_url']?>" border='0' width='548' height='201' /></dt>
                    <dd>2017-05-27
                        <p><a href="/answer/detail/<?=$value['answer_id']?>.html"><?=$value['answer_title']?></a></p>
                        <p class="p1"><a href="/answer/detail/<?=$value['answer_id']?>.html"><?=$value['answer_content']?></a></p>
                    </dd>
                </dl>
                <?php endforeach;?>
            </div>
            <div class="diji">
                <a href="/answer/index/1.html"><img src="/htdocs/images/anji.jpg" border="0" /></a>
            </div>
            <?= View::factory('inc/footer')?>
    </body>

    </html>
