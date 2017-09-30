<?php
namespace Admin\Controller;
use Think\Controller;
class NodeController extends CommonController {
	
	function _filter(&$map){
		// 初始筛选条件
		$map['status'] = array('neq',-1);
		$map['pid']    = I('get.pid',0);

		$_SESSION['currentNodeId'] = $map['pid'];
    }

    function _before_add() {
    	$pid = $_SESSION['currentNodeId'];
    	if ($pid) {
    		$level = M('Node')->getFieldById($id,'level');
    		$level += 1; // 待添加节点的level, 是现在level+1
    	} else {
    		$level = 1; // 如无父id, level=1
    	}
    	$this->assign('pid', $pid);
    	$this->assign('level', $level);
    	// var_dump(_URL_);exit;
    }

}