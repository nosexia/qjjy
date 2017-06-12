<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Account extends Controller {

	public function action_index(){
		$fund = self::action_fund();
		$this->response->body($fund);
	}

	public static function action_fund()
	{
		$array = array('name'=>'nose', 'age'=>23);
		return 2222;
		// return json_encode($array);
	}

}
?>