<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Product extends Controller_Init {
    public function action_index(){
        $this->template = View::factory('product/index');
    }

    public function action_detail(){
        $this->view_data = array();
        $id = $this->request->param('id');
        $query = DB::select()->from('product_detail')->where('product_id', '=', $id);
        $result_list = $query->execute()->as_array()[0];
        $this->view_data['detail'] = $result_list;
        $this->getPrevDetail($id, $this->view_data);
        $this->getNextDetail($id, $this->view_data);
        $this->template = View::factory('product/detail');        
    }

    // 获得上一篇
    public function getPrevDetail($id, & $view_data){
        $query = DB::select()->from('product_detail')->where('product_id', '=', $id-1);
        $result_list = $query->execute()->as_array();
        $view_data['prev_detail'] = $result_list;
    }

    // 获得下一篇
    public function getNextDetail($id, & $view_data){
        $query = DB::select()->from('product_detail')->where('product_id', '=', $id+1);
        $result_list = $query->execute()->as_array();
        $view_data['next_detail'] = $result_list;
    }

}
