<?php
/*
程序功能：Smarty的初始化
程序作者：翅儿学飞
创建时间：20131220
备注信息：无
更新信息：None
*/

//Smarty Initialize
require_once($smarty_lib_dir."Smarty.class.php");

//if user template doesn't include smarty work dir ,then use the default work dir 
$smarty_compile_dir_default = $tpl_dir."/default/smarty_compile/";
$smarty_config_dir_default = $tpl_dir."/default/smarty_config/";
$smarty_cache_dir_default = $tpl_dir."/default/smarty_cache/";

if ( (! file_exists($smarty_compile_dir)) && file_exists($smarty_compile_dir_default) ){
        $smarty_compile_dir = $smarty_compile_dir_default;
}

if ( (! file_exists($smarty_config_dir)) && file_exists($smarty_config_dir_default) ){
        $smarty_config_dir = $smarty_config_dir_default;
}

if ( (! file_exists($smarty_cache_dir)) && file_exists($smarty_cache_dir_default) ){
        $smarty_cache_dir = $smarty_cache_dir_default;
}

//Initialize Smarty Class
$smt = new Smarty();

$smt->setTemplateDir($smarty_tpl_dir);                                                               
$smt->setCompileDir($smarty_compile_dir);
$smt->setConfigDir($smarty_config_dir);
$smt->setCacheDir($smarty_cache_dir);
$smt->debugging = true;

?>
