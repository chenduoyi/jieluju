<?php
namespace Admin\Model;
use Think\Model;
/**
 * 节点模型类
 */
class NodeModel extends CommonModel {
	protected $_validate	=	array(
		// array('name','checkNode','节点已经存在',0,'callback'),
		);

	public function checkNode() {var_dump($_POST);
		$map['name']   = $_POST['name'];
		$map['pid']    = isset($_POST['pid']) ? $_POST['pid'] : 0;
        $map['status'] = 1;
        if(!empty($_POST['id'])) {
			$map['id']	=	array('neq',$_POST['id']);
        }
		$result	=	$this->where($map)->field('id')->find();echo M()->_sql();exit;
        if($result) {
        	return false;
        }else{
			return true;
		}
	}
}