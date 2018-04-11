<?php 
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=imgdb","root","123");
		$pdo->exec("set names utf8");
		//设置pdo的对象的属性
		// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo "数据库连接失败".$e->getMessage();
	}

 ?>