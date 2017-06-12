<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Init extends Controller_Template {
    protected $limit = 4;
    public function set_session(){
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        $redis->set('name', 'nose1');
        // $redis->close();
    }

    public function setPageInfo($result, &$view_data){
        $view_data['totalNum'] = count($result);
        $view_data['totalPage'] = ceil( count($result)/$this->limit );
    }

   
}
