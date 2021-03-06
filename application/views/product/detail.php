<?= View::factory('inc/header')->bind('title', $view_data['detail']['product_title']);?>

    <body>
        <?= View::factory('inc/top_bar')->set('current_bar','product'); ?>
            <div class="clear"></div>
            <div id="banner4"></div>
            <div class="conj_tirel">
                <div class="conj_tirel_con">您当前的位置：<a href='http://127.0.0.1/'>主页</a> > <a href='/a/cpzx/'>产品中心</a> > </div>
            </div>
            <div class="x_new">
                <?=$view_data['detail']['product_title']?>
                    <p>日期：
                        <?=$view_data['detail']['create_time']?>
                    </p>
            </div>
            <div class="wenz"><span style="color: rgb(62, 62, 62); font-family: 微软雅黑;"><?=$view_data['detail']['product_content']?></span></div>
            <div class="xia_xiaq">
                <?php if(!count($view_data['prev_detail'])):?>
                <p>上一篇：没有了</p>
                <?php else:?>
                <p>上一篇：
                    <a href='/product/detail/<?=$view_data['prev_detail'][0]['product_id']?>.html'>
                        <?=$view_data['prev_detail'][0]['product_title']?>
                    </a>
                </p>
                <?php endif;?>
                <?php if(!count($view_data['next_detail'])):?>
                <p>下一篇：没有了</p>
                <?php else:?>
                <p>下一篇：
                    <a href='/product/detail/<?=$view_data['next_detail'][0]['product_id']?>.html'>
                        <?=$view_data['next_detail'][0]['product_title']?>
                    </a>
                </p>
                <?php endif;?>
            </div>
            <?= View::factory('inc/footer')?>
    </body>

    </html>
