<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 13-2-21
 * Time: 下午8:50
 * To change this template use File | Settings | File Templates.
 */


!defined('IN_UC') && exit('Access Denied');

class objectmodle {
	var $db;
	var $base;

	function __construct(&$base) {
		$this->objectmodle($base);
	}

	function objectmodel(&$base) {
		$this->base = $base;
		$this->db = $base->db;
	}
	function get_object($username,$isuid,$type=null) {
		if($type==null){
			$type='*';
		}else{
			$type='uid,username,'.$type;
		}
		if(!$isuid){
			$where='username=\''.$username.'\'';
		}else{
			$where='uid=\''.$username.'\'';
		}
		$arr = $this->db->fetch_first("SELECT ".$type." FROM ".UC_DBTABLEPRE."object WHERE ".$where);
		return $arr;
	}
}

/*
objectmodel($base);

*/

/*这个里面只包含一个方法就是取用户扩展资料。
经过以上的修改uc_client部分就算完成了。已经成功了一半了。*/
?>