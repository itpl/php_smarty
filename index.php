<?php
/*
程序功能：主页
程序作者：翅儿学飞
创建时间：20131219
备注信息：无
更新信息：None
*/

//load config
require_once("config/config.php");
require_once("include/init.php");
require_once("config/config.smarty.php");
require_once("include/init.smarty.php");

//Main Program
$smt->assign('var_a',"Hello Word!");

//Output
$smt->display('index.tpl');
//

?>
