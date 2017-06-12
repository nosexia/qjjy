<?= View::factory('inc/header')->set('title', '新闻中心_千金净雅品牌官方网站');?>

    <body>
        <?= View::factory('inc/top_bar')->set('current_bar', 'news'); ?>
            <div class="clear"></div>
            <div id="banner1"></div>
            <div class="conj_tirel">
                <div class="conj_tirel_con">您当前的位置：<a href='http://127.0.0.1/'>主页</a> > <a href='/a/xwzx/'>新闻中心</a> > </div>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs2.jpg" /></div>
            <div class="list_list">
                <?php foreach ($view_data['list'] as $key => $value):?>
                    <dl>
                        <dt>
                            <a href="/news/detail/<?=$value['news_id']?>.html"><img src="<?=$value['news_image_url']?>" border='0' width='152' height='150' /></a>
                        </dt>
                        <dd><a href="/news/detail/<?=$value['news_id']?>.html"><?=$value['news_title']?></a>
                            <p><?=$value['news_content']?></p>
                            <p class="p2"><?=$value['create_time']?></p>
                        </dd>
                    </dl>
                    
                <?php endforeach;?>
            </div>
            <div class="list_im" style="margin-top:70px">
                <ul>
                    <?php if($view_data['totalPage'] == 1):?>
                        <li><span class="pageinfo">共 <strongs><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条</span></li>
                    <?php else:?>
                        <li><a href="/news/index/1.html">首页</a></li>
                        <li><a href="/news/index/<?=$view_data['page']-1?>.html">上一页</a></li>
                        <?php 
                            $count = 0;
                        ?>
                        <?php while($count<$view_data['totalPage']):?>
                            <?php $count++; ?>
                            <li><a href='/news/index/<?=$count?>.html'><?=$count?></a></li>    
                        <?php endwhile;?>
                        <li><a href="/news/index/<?=$view_data['page']+1?>.html">下一页</a></li>
                        <li><a href="/news/index/<?= $view_data['totalPage']?>.html">末页</a></li> 
                        <li><span class="pageinfo">共 <strong><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条记录</span></li>                                           
                    <?php endif; ?>                    
                </ul>
            </div>
            </div>
            <?= View::factory('inc/footer')?>
    </body>

    </html>
