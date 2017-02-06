<?php 

	namespace Home\Model;
	use Think\Model;

	//父类在Thinkphp/Lib/Think/Model.class

	class UserModel extends Model{
		protected $patchValidate    =   true;
		protected $_validate        =   array(
			array('username','require','用户名必须填写'),
			array('password','require','密码必须填写'),
			array('username',array(100000000,200000000),'账号输入有误',0,'between'),
			array('password','username','密码填写错误',0,'confirm'),
			);
	}

 ?>