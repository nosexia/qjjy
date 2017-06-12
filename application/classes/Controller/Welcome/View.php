<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome_View extends Controller_Welcome {
    public function action_index()
    {   
        $get_name = TestUpper::get();        
        $view = View::factory('welcome/index');
        $view->view_data = array('name'=>'nose');
        $this->template = $view;
    }

    public function get_session(){
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo $redis->get('name');
    }


}
