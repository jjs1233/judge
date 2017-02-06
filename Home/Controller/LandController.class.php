<?php
namespace Home\Controller;
use Think\Controller;
class landController extends Controller {
    public function land(){
    	$this->display();
	}
	public function enter(){
			$user=D('User');
			if(!empty($_POST))
			{
				if(!$user->create())
				{
				echo "<SCRIPT language=JavaScript>alert('您的输入有误')</SCRIPT>";
				echo "<SCRIPT language=JavaScript>window.location.href = 'land';</SCRIPT>";
				}
				else{
					$where[username]=$user->username;
					session('username',$user->username);
					if($need=M('user')->field('finish')->where($where)->select())
					{	
						if($need[0]["finish"]!=1)
						$this->redirect('Paper/Paper/paper');
						else
							{
							echo "<SCRIPT language=JavaScript>alert('您已经做过改试卷')</SCRIPT>";
							echo "<SCRIPT language=JavaScript>window.location.href = 'land';</SCRIPT>";
							}
					}
					else
					{
						$user->add();
						$this->redirect('Paper/Paper/paper');
					}
				}
			}
	}
}
