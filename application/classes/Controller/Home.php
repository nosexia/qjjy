<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Home extends Controller_Init {
    public function action_index(){
        $this->view_data = array();
        // 新闻列表
        $query = DB::select()->from('news')->limit(4)->offset(0);
        $result_list = $query->execute()->as_array();
        $this->view_data['news_list'] = $result_list;

        //answer
        $query = DB::select()->from('answer_detail')->limit(2)->offset(0);
        $result_list = $query->execute()->as_array();
        $this->view_data['answer_list'] = $result_list;

        $this->template = View::factory('home/index');
    }
}
