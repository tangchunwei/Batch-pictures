<?php 
	require_once "conn.php";
	$img = file_get_contents('http://img.581gg.com/picdata-watermark/a1/372/37260-1.jpg');
	file_put_contents('dowload/1.jpg',$img);
	echo '<img src="1.jpg">';
	$dir="./dowload/111";
	mkdir($dir,0777);

	$str="asdfasfd345dsgsd";
	$a=intval($str);
	var_dump($a);

 ?>

