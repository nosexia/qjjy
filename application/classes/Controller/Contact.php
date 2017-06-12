<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Contact extends Controller_Init {
    public function action_index(){
        $this->template = View::factory('contact/index');
    }

    public function action_save(){
        $query = $this->request->query();
        $v = Validation::factory($query);
        $v->rule('mz', 'not_empty')
            ->rule('dh', 'not_empty');
        $v->check();
        // 插入纪录
        $query = DB::insert('customer_info', array('create_time', 'phone', 'min', 'email', 'message'))
            ->values(array(date('Y/m/d'), $query['dh'], $query['mz'], isset($query['yj']) ? isset($query['yj']) : NULL, isset($query['ly']) ? isset($query['ly']) : NULL));
        $query->execute();
        echo '1';
        exit; 
    }

}
