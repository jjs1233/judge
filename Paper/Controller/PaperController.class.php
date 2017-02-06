<?php
namespace Paper\Controller;
use Think\Controller;
class PaperController extends Controller {
    public function paper(){
        $where_1[open_1]=1;
        if($test_paper_class=M('connect')->where($where_1)->select()){
                $where_2[target]=$test_paper_class[0]["target"];
                $title=$test_paper_class[0]["name"];
                $test_paper=randget("bank",$test_paper_class[0]["target"],20);
                $i=0;
                while($test_paper[$i]!=NULL){
                    if($test_paper[$i]["question_class"]==1){
                        $DanXuan[$i]['id']=$test_paper[$i]["id"];
                        $DanXuan[$i]['question']=$test_paper[$i]["question"];
                        $DanXuan[$i]['correct']=$test_paper[$i]["correct"];
                        $answer=json_decode($test_paper[$i]["answer"]);
                        $j=0;
                        while($answer[$j]!=NULL){
                            $DanXuan[$i]["answer_".$j]=$answer[$j];
                            $j++;
                        }
                    }
                $i++;
                }
                $_SESSION[target]=$test_paper_class[0]["target"];
                $this->assign('title',$title);
                $this->assign('username',$_GET['username']);
                $this->assign('usernumber',$_GET['usernumber']);
                $this->assign('target',$test_paper_class[0]["target"]);
                $this->assign('DanXuan',$DanXuan);
       		    $this->display();
        }
        else{
            echo "并没有调查发出！";
        }
    }
    public function grade(){
        	dump($_POST);
            // $result=implode(',',$_POST);
            // $where_1[target]=$_SESSION[target];
            // $correct=M('bank')->field('correct')->where($where_1)->select();
            // $correct_1=record_question_num($correct,"correct");
            // $correct=explode(',', $correct_1);
            // $compare=explode(',', $result);
            // $right=get_same($correct,$compare);
            // $grade=$right/count($correct)*100;
            // $grade=round($grade,2);
            // $where_2[username]=$_SESSION[username];
            // $check=M('grade')->field('right')->where($where_2)->select();
            // if($check[0]["right"]==-1)
            // {
            // $data=array(
            //             'right'=>"$right",
            //             'result'=>"$result",
            //             'grade'=>"$grade",
            //             );
            // $update=array(
            //             'finish'=>1,
            //     );
            // M('grade')->where($where_2)->save($data);
            // M('user')->where($where_2)->save($update);
            // }
            // $this->redirect('Paper/Paper/analyse');
    }
    public function analyse(){
            // $where_1[username]=$_SESSION[username];
            // if($conclude=M('grade')->field('grade,right,num,result,target')->where($where_1)->select()){
            //     $question_num=explode(',', $conclude[0]["num"]);
            //     $where[target]=$conclude[0]["target"];
            //     // for($i=0;$question_num[$i]!=NULL;$i++)
            //     //    $id[$i]=array('eq',$question_num[$i]);
            //     // $id[$i]='or';
            //     $question=M('bank')->where($where)->select();
            //     $i=0;
            //     while($question[$i]!=0)
            //     {   
            //         //不同题型
            //         if($question[$i]["question_class"]==1)
            //         {
            //             $answer=explode(',', $question[$i]["answer"]);
            //             $question[$i]["answer"]=$answer;
            //         }
            //         $i++;
            //     }
            //     for($i=0;$i<count($question);$i++)
            //     $right[$i]=$question[$i]['correct'];
            //     $result=explode(',', $conclude[0]["result"]);
            //     $this->assign('right',$right);
            //     $this->assign('result',$result);
            //     $this->assign('question',$question);
            //     $this->assign('grade',$conclude[0]["grade"]);
            //     $this->assign('person',$_SESSION[username]);
            //     $this->assign('count',count($question));
            //     $this->display();
            // }
    }
    public function phone(){
                $phone=D('phone');
                $phone->create();
                $phone->lastdate="20".date('y-m-d H:i:s',time());
                $i=0;
                foreach ($_POST['num'] as $k => $v) {
                        if($v[0]==$v[1])
                            $i++;
                }
                $grade=(int)($i/count($_POST['num'])*100);
                $phone->grade=$grade;
                if(I('super')==1){
                	$where_username['academy']=$_POST['academy'];
                    $where_usernumber['usernumber']=0;
                }else{
                	$where_username['academy']=0;
                    $where_username['usernumber']=$_POST['usernumber'];
                }
                $where_username['username']=$_POST['username'];
                $where_username['target']=$_POST['target'];
                if($old=M('phone')->where($where_username)->select()){
                    if($old[0]['grade']<$grade)
                    {
                        $phone->where($where_username)->save();
                    }
                    elseif($old[0]['grade']==$grade&&$old[0]['time_spent']>$_POST['time_spent'])
                    {
                        $phone->where($where_username)->save();
                    }
                }
                else{
                    $phone->add();
                }
                $phone=M('phone')->where($where_username)->select();
                $where_grade['target']=$_POST['target'];
                $where_grade['grade']=array('gt',$phone[0]['grade']);
                $count1=M('phone')->where($where_grade)->count(); 
                $where_count2['target']=$_POST['target'];
                $where_count2['grade']=$phone[0]['grade'];
                $where_count2['time_spent']=array('LT',$phone[0]['time_spent']);
                $count2=M('phone')->where($where_count2)->count();
                $this->redirect('Paper/Paper/result',array('record' => ($count1+$count2+1),'grade'=>$grade,'usernumber'=>$_POST['usernumber'],'username'=>$_POST['username'],'academy'=>I('academy'),'super'=>I('super')));
    }
    public function result(){
    			$target=M('phone')->where($_GET)->field('target')->find();
                $user=M('phone')->where($_GET)->field('username,usernumber,grade,time_spent,academy')->find();
                $user[count]=M('phone')->where(array('target' => $target['target']))->count();
                $user[nowgrade]=I('grade');
                $user[record]=I('record');
                $this->title=M('connect')->where(array('target' => $target['target']))->field('name')->find();
                if(I('super')==1){
                $this->transl=array(
                	'username' => '姓名',
                	'academy' => '学校',
                	'nowgrade' => '当前成绩',
                	'grade' => '历史最高成绩',
                	'record' => '历史最高排名',
                	'count' => '当前做题人数',
                	'time_spent' => '花费时间'
                	);
            	}
            	else{
            	$this->transl=array(
                	'username' => '姓名',
                	'usernumber' => '学号',
                	'nowgrade' => '当前成绩',
                	'grade' => '历史最高成绩',
                	'record' => '历史最高排名',
                	'count' => '当前做题人数',
                	'time_spent' => '花费时间'
                	);
            	}
            	$this->super=I('super');
                $this->user=$user;
                $this->display();
    }
    public function finish(){
                $this->display();
    }


    public function situation(){
                $super=I('super');
                if($super==1){
                $Model = new \Think\Model();
                $test=M('connect')->field('target,name')->where(array('super'=>1))->find();
                $this->title=$test['name'];
                $count=$Model->query("select academy,TRUNCATE(avg(grade),2),COUNT(academy) from phone INNER JOIN School ON phone.academy=school.school where phone.target = '$test[target]' group by academy order by COUNT(academy) desc");
                $this->count=$count;
                $this->super=1;
                $this->display();
                }
                else{
                $where_1[open_1]=1;
                $test=M('connect')->where($where_1)->select();
                $where_target[target]=$test[0][target];
                $list=M('phone')->field('usernumber')->where($where_target)->select();
                for($i=0;$list[$i]!=NULL;$i++){
                    $a[$i]=$list[$i][usernumber];
                }
                $where_id[id] = array('IN',$a);
                $list=M('student')->field('number,academy')->where($where_id)->select();
                $academy = array_column($list,'academy');
                $this->assign('count',array_count_values($academy));
                $this->display();
                }
    }
    public function super(){
    	 		$where_1[super]=1;
    			$test_paper_class=M('connect')->where($where_1)->select();
                $target = $test_paper_class[0][target];
                $paper = M('connect')->where(array('target' => $target))->find();
                $test_paper = randget("bank",$target,20);
                $i=0;
                while($test_paper[$i]!=NULL){
                    if($test_paper[$i]["question_class"]==1){
                        $DanXuan[$i]['id']=$test_paper[$i]["id"];
                        $DanXuan[$i]['question']=$test_paper[$i]["question"];
                        $DanXuan[$i]['correct']=$test_paper[$i]["correct"];
                        $answer=json_decode($test_paper[$i]["answer"]);
                        $j=0;
                        while($answer[$j]!=NULL){
                            $DanXuan[$i]["answer_".$j]=$answer[$j];
                            $j++;
                        }
                    }
                $i++;
                }
                $_SESSION[target]=$test_paper_class[0]["target"];
                $this->assign('title',$paper[name]);
                $this->assign('username',$_GET['username']);
                $this->assign('academy',$_GET['academy']);
                $this->assign('target',$test_paper_class[0]["target"]);
                $this->assign('DanXuan',$DanXuan);
                $this->super = 1;
                $this->display();
    }
}