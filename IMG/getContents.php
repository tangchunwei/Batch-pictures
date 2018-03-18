<?php 
require_once "conn.php";
//去数据库中查询所有的url地址
	set_time_limit(0);
	ob_end_clean();
	ob_implicit_flush();
	$total=0;
	$sql="select * from url_list";
	$stmt=$pdo->query($sql);
	$urlarr=$stmt->fetchAll(PDO::FETCH_ASSOC);
	for($i=0;$i<count($urlarr);$i++){
				$data=array();
				$str=file_get_contents($urlarr[$i]['url']);
				//获取文件名字并创建文件夹$result0[1]
				$patt="/<h3 class=\"title editable bottom-5\" name=\"title\" data-url=\".*\">(.*)<\/h3>/Us";
				$a=preg_match($patt,$str,$result0);
				$result0[1]=iconv('utf-8', 'gbk',$result0[1]);
				$dir=mkdir("./dowload/$result0[1]",0777);
				//定义循环次数
				$patt3="/(\d)+/";
				preg_match($patt3,$result0[1],$num);
				$num[0]=$num[0]*1;
				//获取所有图片路径$result1
				$patt1="/<div id=\'node-content\'>(.*)<\/div>/s";
				$a=preg_match($patt1,$str,$result);
				$patt2="/((http|ftp|https):\/\/)?[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:\/~\+#]*[\w\-\@?^=%&amp;\/~\+#])?/s";
				$a=preg_match_all($patt2,$result[1],$result1);
				// var_dump($result1[0]);
				// 定义循环
				for($j=0;$j<$num[0];$j++){
					$img = file_get_contents($result1[0][$j]);
					
					file_put_contents("./dowload/{$result0[1]}/{$j}.jpg",$img);
					$total++;
					echo "成功保存了{$total}张图片<br>";
				}	
		
	}
 ?>