<?php
namespace Admin\Controller;
use Think\Controller;
class NodeController extends CommonController {
	private $map_str = array();
	function test() {
		$res = getStatus(1);var_dump($res);exit;
	}

	function _filter(&$map){
        $map =  $this->map_str;
    }

	function _before_index() {
		$this->map_str['status'] = array('neq',-1);
	}

}