<ul>
    <?php if($view_data['totalPage'] == 1):?>
        <li><span class="pageinfo">共 <strongs><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条</span></li>
    <?php else:?>
        $totalPage = $view_data['totalPage'];

        <li>首页</li>                    
        $count =
        <li><a href='list_3_3.html'>3</a></li>
        <li><a href='list_3_4.html'>4</a></li>
        <li><a href='list_3_2.html'>下一页</a></li>
        <li><a href='list_3_4.html'>末页</a></`li> 
        <li><span class="pageinfo">共 <strong><?= $view_data['totalPage']?></strong>页<strong><?= $view_data['totalNum']?></strong>条</span></li>                                           
    <?php endif; ?>                    
</ul>