<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Company extends Controller_Init {
    public function action_index(){
        $this->template = View::factory('company/index');
    }
}
