<?php 
function user($username,$password){
	if($username==$password&&$username>100000000&&$username<200000000)
		$b=array(
			"username"=> "$username",
			"password"=>"$password",
			"date"=> date("Y/m/d") 
			);
		M('user')->add($b);
}
function record($select,$grade,$spent){
}
function num($num,$username)
{
	$a[username]=array('eq',"$username");
	$b=M('grade')->where($a)->select();
	if($b==NULL)
	{
		$str = implode(',',$num);
		$b=array(
			"username"=> "$username",
			"num"=>"$str",
			);
		M('grade')->add($b);
		return $str;
	}
	else
	{
		return $b[0]['num'];
	}
}
function focus($username)
{
	$a[username]=array('eq',"$username");
	$b=M('user')->field('finish')->where($a)->select();
	return $b[0]['finish'];
}
function record_question_num($array,$name)
{
	foreach($array as $key=>$value)
	{
		$record[$key]=$array[$key]["$name"];
	}
	$str=implode(',', $record);
	return $str;
}
function get_same($array1,$array2)
{
	$i=0;
	foreach($array1 as $key=>$value)
	{
		if($array1[$key]==$array2[$key])
			$i++;
	}
	return $i;
}
function bank_make($POST)
{
			$newtarget=M('connect')->max('target')+1;//创建中间数据
 			$newconnect=array(
				'name'=>$POST['title'],
				'target'=>$newtarget,
				'date'=>date("Y/m/d")
			);
			dump($newconnect);
			M('connect')->add($newconnect); //创建中间数据结束
			for($i=1;$i<=$POST[number1];$i++)//选择题导入至数组
			{
				for($j=1;$j<=$POST[number2];$j++)//选择题答案导入至数组
				{
					$sb='answer'.$i.$j;
					if($POST[$sb]!=NULL){
						$ssb[$j]=$POST[$sb];
					}
				}
				$answer=implode(',', $ssb);
				$newbank=array(
					'question'=>$POST[question.$i],
					'question_class'=>1,
					'answer'=>$answer,
					'correct'=>$POST[select.$i],
					'target'=>$newtarget
				);
				M('bank')->add($newbank);
			}
			for($j=1;$j<=$POST[number3];$j++)//简答题导入至数组
			{
				$newbank=array(
						'question'=>$POST[question.$i],
						'question_class'=>2,
						'answer'=>$POST[para.$i],
						'correct'=>-1,
						'target'=>$newtarget,
					);
				$i++;
				// M('bank')->add($newbank);
			}
}
function bank_save($POST)
{
		$where_target['target']=$POST['target'];
		$newconnect=array(
				'name'=>$POST['newtitle'],
				'target'=>$POST['target'],
				'date'=>date("Y/m/d")
			);
		if($id=M('connect')->field('id')->where($where_target)->select())
		{
			M('connect')->where($where_target)->save($newconnect);//更改中间数据表的数据
		}
		else{
			M('connect')->add($newconnect);
		}
							 
		$i=0; 										//更改选择题题库数据
		while($POST['xuanze'][$i][0]!=NULL)
		{
			$answer=json_encode($POST['xuanze'][$i][2],JSON_UNESCAPED_UNICODE);
			$test[$i]['question']=$POST['xuanze'][$i][0];
			$test[$i]['question_class']=1;
			$test[$i]['answer']=$answer;
			$test[$i]['correct']=$POST['xuanze'][$i][1];
			$test[$i]['target']=$POST['target'];
			$i++;
		}
		while($POST['jianda'][$i][0]!=NULL)
		{
			$test[$i]['question']=$POST['jianda'][$i][0];
			$test[$i]['question_class']=2;
			$test[$i]['answer']=$POST['jianda'][$i][1];
			$test[$i]['correct']=-1;
			$test[$i]['target']=$POST['target'];
			$i++;	
		}
		$j=0;
		if($id=M('bank')->field('id')->where($where_target)->select()){
			// dump($id);
			while ($test[$j]!=NULL) {
				$where_id['id']=$id[$j]['id'];
				M('bank')->where($where_id)->save($test[$j]);
				$j++;
			}
		}
		else{
		// $data=M('bank')->where($where_target)->delete();  //删除原有数据
		while($test[$j]!=NULL)								//导入新数据
		{
			M('bank')->add($test[$j]);							
			$j++;
		}
	}
}
function excel_input($filename,$encode='utf-8'){
          $objPHPExcel = PHPExcel_IOFactory::load(LOCAL."$filename");
          $objWorksheet = $objPHPExcel->getSheet(0);
		  $highestRow = $objWorksheet->getHighestRow();
		  $highestColumn = $objWorksheet->getHighestColumn(); 
		  $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); 
		  $excelData = array(); 
		  for ($row = 1; $row <= $highestRow; $row++) { 
		  	for ($col = 0; $col < $highestColumnIndex; $col++) { 
                 $excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
           } 
          } 
         $zimu=array(A=>1,B=>2,C=>3,D=>4,E=>5);
         $POST['target']=M('connect')->max('target')+1;
         $POST['newtitle']=$excelData[1][7];
         for($i=3;$i<=$highestRow;$i++)
         {
         	$POST['xuanze'][$i-3][0]=$excelData[$i][0];
         	$POST['xuanze'][$i-3][1]=$zimu[$excelData[$i][1]];
         	for($j=2;$j<7;$j++)
         	{
         		if($excelData[$i][$j]!=NULL)
         		$POST['xuanze'][$i-3][2][$j-2]=$excelData[$i][$j];
         	}
         }
         bank_save($POST);
}  
function my_phone_out($list)
{
        $excel = new \PHPExcel();
        $excel->getProperties()->setCreator("xiao T")->setLastModifiedBy("xiao T")
            ->setTitle("Office 2007 XLSX Test Document")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Test result file");
        $i=2;
        $excel->setActiveSheetIndex(0)
            ->setCellValue('A1', '学号')
			->setCellValue('B1', '姓名')
			->setCellValue('C1', '排名')
			->setCellValue('D1', '成绩')
			->setCellValue('E1', '花费时间')
			->setCellValue('F1', '日期')
			->setCellValue('G1', '部门');
        foreach($list as $k=>$v){
            $excel->setActiveSheetIndex(0)
                ->setCellValue('A'.($k+2), $v['usernumber'])
                ->setCellValue('B'.($k+2), $v['username'])
				->setCellValue('C'.($k+2), $k+1)
				->setCellValue('D'.($k+2), $v['grade'])
				->setCellValue('E'.($k+2), $v['time_spent'])
				->setCellValue('F'.($k+2), $v['lastdate'])
				->setCellValue('G'.($k+2), $v['academy']);
        }
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25);//设置宽度
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(25);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(25);
        $excel->getActiveSheet()->setTitle('HEHE');
        $excel->setActiveSheetIndex(0);
        ob_end_clean();
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate,post-check=0,pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        header('Content-Disposition:attachment;filename='. time() .'HEHE.xls');//设置文件的名称
        header("Content-Transfer-Encoding:binary");
        $excel = \PHPExcel_IOFactory::createWriter($excel, 'Excel5');
        $excel->save('php://output');
        exit;
}
function randget($name,$target,$num){
		$where['target']=$target;
		$table=M($name);
		$count=$table->where($where)->count();
		$limit=$table->where($where)->min('id');
		// $rand=mt_rand(0,$count-1-$num); //产生随机数
		// $limit=$rand.','.$num;
		$average=(int)($count/20);
		$rand=mt_rand(0,(int)($count / 20));
		for($i=0;$i<20;$i++)
			$array1["$i"]=randinCount($rand,$average)+$limit+$average*$i;
		$where['id']= array('in',$array1);
		$data=$table->where($where)->select();
		return $data;   
}
function randinCount($num,$count){
		$rand = mt_rand(0,$num*1139.141);
		return (int)$rand % $count; 
}