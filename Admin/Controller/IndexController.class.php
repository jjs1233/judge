<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function admin(){
    	$this->display();
 	}
 	public function have(){
 		$this->display();
 	}
 	public function nohave(){
 		$this->display();
 	}
}