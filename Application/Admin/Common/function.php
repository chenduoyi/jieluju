<?php
/**
 * 后台公共函数
 */
function getStatus($status, $imageShow = true) {
	switch ($status) {
		case 0 :
			$showText = '禁用';
			$showImg = '<img src="/Public/images/locked.gif" width="20" height="20" border="0" alt="禁用">';
			break;
		case 2 :
			$showText = '待审';
			$showImg = '<img src="/Public/images/prected.gif" width="20" height="20" border="0" alt="待审">';
			break;
		case - 1 :
			$showText = '删除';
			$showImg = '<img src="/Public/images/del.gif" width="20" height="20" border="0" alt="删除">';
			break;
		case 1 :
		default :
			$showText = '正常';
			$showImg = '<img src="/Public/images/ok.gif" width="20" height="20" border="0" alt="正常">';

	}
	return ($imageShow === true) ?  $showImg  : $showText;
}

// 
function showStatus($status, $id, $msg="",$callback="") {
	if (ACTION_NAME =='index') {
		$str1 = '';
	}else{
		$str1 = ACTION_NAME;
	}
	$str = $msg ? '<a href="javascript:;" onclick=testConfirmMsg(\''.__URL__.'/forbid/id/' . $id . '/navTabId/'.CONTROLLER_NAME.'/asd/'.$str1.'\',"'.$msg.'")>禁用</a>':'<a href="__URL__/forbid/id/' . $id . '/navTabId/CONTROLLER_NAME/asd/'.$str1.'" target="ajaxTodo" callback="'.$callback.'">禁用</a>';
	switch ($status) {
		case 0 :  
			$info = '<a href="__URL__/resume/id/' . $id . '/navTabId/CONTROLLER_NAME/asd/'.$str1.'" target="ajaxTodo" callback="'.$callback.'">启用</a>';
			break;
		case 2 :
			$info = '<a href="__URL__/pass/id/' . $id . '/navTabId/CONTROLLER_NAME" target="ajaxTodo" callback="'.$callback.'">批准</a>';
			break;
		case 1 :
			$info = $str;
			break;
		case - 1 :
			$info = '<a href="__URL__/recycle/id/' . $id . '/navTabId/CONTROLLER_NAME" target="ajaxTodo" callback="'.$callback.'">还原</a>';
			break;
	}
	return $info;
}