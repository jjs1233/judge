<?php
namespace Admin\Controller;
use Think\Controller;
import('Vendor.Excel.PHPExcel');
class ItemController extends Controller {
	public function look(){
 		$item=M('connect')->order('id desc')->select();
 		$this->assign('item',$item);
 		$this->display();
 	}
 	public function change(){
 		$item=M('connect')->order('id desc')->select();
 		$this->assign('item',$item);
 		$this->display();
 	}
 	public function make(){
 		if(!empty($_POST)){
            $target=M('connect')->max('target')+1;
            $_POST['target']=$target;
 			bank_save($_POST);
		}
 	}
 	public function changepaper($target)  //修改的页面
 	{
 		$where_target['target']=$target;
 		$title=M('connect')->where($where_target)->select();
 		$get_question=M('bank')->where($where_target)->select();
 		$i=0;
 		$zimu=array(A,B,C,D,E,F);
 		foreach ($get_question as $k=>$v) {
 			if($v['question_class']==1)
 			{
 				$j=$v['correct'];
 				$get_question[$k]['answer']=json_decode($v['answer']);
 				$get_question[$k]['newcorrect']=$zimu[$j-1];
 			}
 		}
 		// dump($title);
 		// dump($get_question);
 		$this->assign('zimu',$zimu);
 		$this->assign('title',$title);
 		$this->assign('item',$get_question);
 		$this->display();
 	}
 	public function changepaper_post(){		//修改页面传值传到这
 		// dump($_POST);
 		if(!empty($_POST))
 		{
		bank_save($_POST);
		$this->success('修改完成','../Index/Admin',1);
		}
 	}
	public function questionnaire1(){
 		$this->display();
 	}
 	public function questionnaire2(){
 		$this->display();
 	}
 	public function questionnaire3(){
 		$this->display();
 	}
 	public function questionnaire3_post(){
 		if (! empty ( $_FILES ['file_stu'] ['name'] ))
 			{
   		$tmp_file = $_FILES ['file_stu'] ['tmp_name'];
    	$file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
    	$file_type = $file_types [count ( $file_types ) - 1];
     	/*判别是不是.xls文件，判别是不是excel文件*/
    	$type = strtolower( pathinfo($file, PATHINFO_EXTENSION) );
     		if ($file_type!='xlsx' && $file_type!='xls' )              
    			{
          			$this->error ( '不是Excel文件，重新上传' );
     			}
    	/*设置上传路径*/
     	$savePath = '/Public/';
     	
    	/*以时间来命名上传的文件*/
     	$str = date ( 'Ymdhis' ); 
 			$config = array(
             'rootPath'      =>  './Public/',
             'savePath'      =>  'upload/',
            );
            $upload = new \Think\Upload($config);
            if($z=$upload->uploadOne($_FILES['file_stu'])) 	//建立缓存文件
            $file=$savePath.$z['savepath'].$z['savename'];		//提取缓存文件
            dump($file);
            excel_input($file);
            $this->redirect('Admin/Item/look');
		}
		else{
			$this->error ('上传失败');
		}
 	}
 	public function nowpaper($target){
 		$where_target[target]=$target;
 		$get_question=M('bank')->where($where_target)->select();
 		$i=0;
 		$zimu=array(A,B,C,D,E,F);
 		foreach ($get_question as $k=>$v) {
 			if($v['question_class']==1)
 			{
 				$j=$v['correct'];
 				$get_question[$k]['answer']=json_decode($v['answer']);
 				$get_question[$k]['correct']=$zimu[$j-1];
 			}
 		}
 		$this->assign('target',$target);
 		$this->assign('zimu',$zimu);
 		$this->assign('item',$get_question);
 		$this->display();
 	}
 	public function delete($target){      //删除问卷  代补充
        $where[target]=$target;
        M('connect')->where($where)->delete();
        M('bank')->where($where)->delete();
        M('phone')->where($where)->delete();
        $this->redirect('Admin/Item/change');
 	}
 	public function phone_out($target){
        $where[target]=$target;
        $super=M('connect')->where($where)->find();
        if($super[super]==1){
        $list=M('phone')->where($where)->field('academy,usernumber,grade,lastdate,time_spent,username')->select();  
        }else{
        $list=M('phone')->join('student ON phone.usernumber = student.id')->where($where)->field('student.academy,usernumber,grade,lastdate,time_spent,username')->order('grade desc,time_spent asc,phone.id asc')->select();               //得到所有人的成绩me
        }
        my_phone_out($list);
 	}
 	public function questionnaire2_post(){
 		dump($_POST);
 		$xuanze=explode("\n", $_POST["xuanze"]);
 		dump($xuanze);
 		$xuanze_count=count($xuanze);
 		$k=0;
 		$j=0;
 		$m=0;
 		for($i=0;$i<$xuanze_count;$i++)
 		{
 			if($xuanze[$i]!="\r\n\n")
 			{
 				if($k==0)
 				{
 					$test[$j]['question']=$xuanze[$i];
 					$k=1;
 				}
 				else
 				{
 					$test[$j]['answer'][$m]=$xuanze[$i];
 					$m++;
 				}
 			}
 			else
 			{
 				$k=0;
 				$m=0;
 				$j++;
 			}
 		}
 		dump($test);
 	}
    public function open($target){
        $where_open[target]=$target;
        $where_close[open_1]=1;
        $change=M('connect')->where($where_open)->select();
        $close=M('connect')->where($where_close)->select();
        $change[0]['open_1']=1;
        $close[0]['open_1']=-1;
        M('connect')->where($where_close)->save($close[0]);
        M('connect')->where($where)->save($change[0]);
        $this->redirect('Admin/Item/look');
    }
}