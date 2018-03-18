<?php 
	/*require_once "conn.php";
	set_time_limit(0);
	ob_end_clean();
	ob_implicit_flush();
	$total=0;
    $qianzhui="http://www.hchc66.com";
	for($m=2;$m<=2808;$m++){
	$str=file_get_contents("http://www.hchc66.com/arttypehtml/1-{$m}.html");
    $patt="/<div class=\'block-layer\'>.*<div class=\'media-image\'>.*<a href=\"(.*)\"/Us";
    $a=preg_match_all($patt,$str,$result);
    // var_dump($a,$result);
    // var_dump($result[1]);
    for($i=0;$i<count($result[1]);$i++){
    	$sql="insert into url_list values(null,:url,:page)";
    	$stmt=$pdo->prepare($sql);
    	$data[':url']=$qianzhui.$result[1][$i];
    	$data[':page']=$m;
    	if($stmt->execute($data)){
    		$total++;
    		echo "成功保存了{$total}条网址<br>";
    	}
    }
  }*/
 ?>