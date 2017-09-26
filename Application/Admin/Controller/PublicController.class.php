<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
        $this->display();
    }

    // 后台首页 查看系统信息
    public function main() {
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            'ThinkPHP版本'=>THINK_VERSION.' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
            );
        $this->assign('info',$info);
        $this->display();
    }

     // 菜单页面
    public function menu() {
        $menu = array(
            array(
                "id"       => "40",
                "name"     => "Index",
                "group_id" => "0",
                "title"    => "默认模块",
                "access"   => 1,
            ),
            array(
                "id"       => "40",
                "name"     => "Public",
                "group_id" => "0",
                "title"    => "公共模块",
                "access"   => 1,
            ),
            array(
                "id"       => "40",
                "name"     => "Node",
                "group_id" => "0",
                "title"    => "节点管理",
                "access"   => 1,
            ),
            array(
                "id"       => "40",
                "name"     => "Role",
                "group_id" => "0",
                "title"    => "角色管理",
                "access"   => 1,
            ),
            array(
                "id"       => "40",
                "name"     => "User",
                "group_id" => "0",
                "title"    => "后台用户",
                "access"   => 1,
            ),
        );
        $this->assign('menu', $menu);
        $this->display();
    }
}