<?= View::factory('inc/header')->set('title', '百问百答_千金净雅品牌官方网站');?>

    <body>
        <?= View::factory('inc/top_bar')->set('current_bar','answer'); ?>
            <div class="clear"></div>
            <div id="banner"></div>
            <div class="conj_tirel">
                <div class="conj_tirel_con">您当前的位置：<a href='http://127.0.0.1/'>主页</a> > <a href='/a/bwbd/'>百问百答</a> > </div>
            </div>
            <div class="gsjj_title"><img src="/htdocs/images/gsjs3.jpg" /></div>
            <div class="baiwen_ko1">
                <?php foreach ($view_data['list'] as $key => $value): ?>
                    <dl>
                        <dt><img src="<?=$value['image_url']?>" border='0' width='548' height='201' /></dt>
                        <dd><?=$value['create_time']?>
                            <p><a href="/answer/detail/<?= $value['answer_id']?>.html"><?=$value['answer_title']?></a></p>
                            <p class="p1"><a href="/answer/detail/<?= $value['answer_id']?>.html"><?=$value['answer_brief']?></a></p>
                        </dd>
                    </dl>
                    
                <?php endforeach ?>
            </div>
            <div class="list_im" style="margin-top:70px">
                <ul>
                    <?php if($view_data['totalPage'] == 1):?>
                        <li><span class="pageinfo">共 <strongs><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条</span></li>
                    <?php else:?>
                        <li><a href="/answer/index/1.html">首页</a></li>
                        <li><a href="/answer/index/<?=$view_data['page']-1?>.html">上一页</a></li>
                        <?php 
                            $count = 0;
                        ?>
                        <?php while($count<$view_data['totalPage']):?>
                            <?php $count++; ?>
                            <li><a href='/answer/index/<?=$count?>.html'><?=$count?></a></li>    
                        <?php endwhile;?>
                        <li><a href="/answer/index/<?=$view_data['page']+1?>.html">下一页</a></li>
                        <li><a href="/answer/index/<?= $view_data['totalPage']?>.html">末页</a></li> 
                        <li><span class="pageinfo">共 <strong><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条记录</span></li>                                           
                    <?php endif; ?>                    
                </ul>
            </div>
            </div>
            <?= View::factory('inc/footer')?>
    </body>

    </html>
