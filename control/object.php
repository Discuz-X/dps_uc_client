<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 13-2-21
 * Time: 下午8:47
 * To change this template use File | Settings | File Templates.
 */


!defined('IN_UC') && exit('Access Denied');

class objectcontrol extends base {

	function __construct() {
		$this->objectcontrol();
	}
	function objectcontrol() {
		parent::__construct();
		$this->load('object');
		//note client 仅在需要时初始化 $this->app
		$this->app = $this->cache['apps'][UC_APPID];
	}

	//note public 外部接口
	function onget() {
		$this->init_input();
		$isuid = $this->input('isuid');
		$username = $this->input('username');
		$type = $this->input('type');
		return $_ENV['object']->get_object($username, $isuid, $type);
	}
}

/*
objectcontrol();
*/

/*这个里面只包含一个方法就是取用户扩展资料。*/

?>