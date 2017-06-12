<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Answer extends Controller_Init {
    public function action_index(){
        $this->view_data = array();
        $page = $this->request->param('id');
        // 查询列表
        $query = DB::select()->from('answer')->limit($this->limit)->offset($this->limit*($page-1));
        $result_list = $query->execute()->as_array();
        $this->view_data['list'] = $result_list;

        // 总页数
        $query_page = DB::select()->from('answer');
        $result_page = $query_page->execute()->as_array();
        $this->setPageInfo($result_page, $this->view_data);  
        $this->view_data['page'] = $page;


        $this->template = View::factory('answer/index');
    }

    public function action_detail(){
        $this->view_data = array();
        $id = $this->request->param('id');
        $query = DB::select()->from('answer_detail')->where('answer_id', '=', $id);
        $result_list = $query->execute()->as_array()[0];
        $this->view_data['detail'] = $result_list;
        $this->getPrevDetail($id, $this->view_data);
        $this->getNextDetail($id, $this->view_data);
        $this->template = View::factory('answer/detail');
    }

    // 获得上一篇
    public function getPrevDetail($id, & $view_data){
        $query = DB::select()->from('answer_detail')->where('answer_id', '=', $id-1);
        $result_list = $query->execute()->as_array();
        $view_data['prev_detail'] = $result_list;
    }

    // 获得下一篇
    public function getNextDetail($id, & $view_data){
        $query = DB::select()->from('answer_detail')->where('answer_id', '=', $id+1);
        $result_list = $query->execute()->as_array();
        $view_data['next_detail'] = $result_list;
    }


}
