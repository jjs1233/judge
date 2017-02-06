<?php
namespace Home\Controller;
use Think\Controller;
class SelectController extends Controller {
	public function select(){
		$where[open_1]=1;		//选择试卷的前提 试卷必须开启状态可以这里加条件
		$want=M('connect')->field('name,date')->order('date desc')->where($where)->select();
		$this->assign('v',$want);
		$this->display();
	}
	// public function select(){
	// 	echo $_SESSION['username'];
	// 	$finish=explode(',', $_GET["need"]);
	// 	dump($finish);
	// 	$this->display();
	// }
	public function choose(){
		dump($_SESSION[username]);
	}
}