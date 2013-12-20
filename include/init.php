<?php
/*
程序功能：程序的全局初始化
程序作者：翅儿学飞
创建时间：20131219
备注信息：无
更新信息：None
*/

//session_start();

date_default_timezone_set($time_zone); 

//dir define
$file_name = __FILE__; 
$home_dir = dirname(dirname(realpath($file_name)))."/";
$conf_dir = $home_dir."config/";
$lib_dir = $home_dir."lib/";
$include_dir = $home_dir."include/";
$css_dir = $home_dir."css/";
$js_dir = $home_dir."js/";
$image_dir = $home_dir."image/";
$lang_dir = $home_dir."language/";
$tpl_dir = $home_dir."template/";

//template define
if ( $tpl_name == "" ){
    $tpl_name = "default";
}

$tpl_home_dir = $tpl_dir.$tpl_name."/";
if ( ! file_exists($tpl_home_dir) ){
    echo "template doesn't exist!Please Check!";
}

$tpl_css_dir = $tpl_home_dir."css/";
if ( ! file_exists($tpl_css_dir) ){
    $tpl_css_dir = $css_dir;
}

$tpl_js_dir = $tpl_home_dir."js/";
if ( ! file_exists($tpl_js_dir) ){
    $tpl_js_dir = $js_dir;
}

$tpl_image_dir = $tpl_home_dir."image/";
if ( ! file_exists($tpl_image_dir) ){
    $tpl_image_dir = $image_dir;
}

//language define
if ( $lang == "" ){
    $lang = "default";
}

$lang_home_dir = $lang_dir.$lang."/";
if ( ! file_exists($lang_home_dir) ){
    echo "language dir doesn't exist!Please Check!I'll use default instead!";
    $lang_home_dir = $lang_dir."default/";
}

?>
