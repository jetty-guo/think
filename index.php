<?php
	
	define('THINK_PATH','./ThinkPHP/');
	define('APP_PATH','./home/');//自带了一个应用入口文件
	define('APP_NAME','home');
	define('STRIP_RUNTIME_SPACE',false);
	define('APP_DEBUG',true);//应用调试模式 （默认为false）
	define('__PUBLIC__','__ROOT__/public/');

	require		THINK_PATH.'ThinkPHP.php';//框架核心目录的位置或者目录名

?>