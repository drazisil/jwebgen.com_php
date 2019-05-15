<?php 

date_default_timezone_set('America/Chicago');

$home_path = '/var/www/site/';

// put full path to Smarty.class.php
require($home_path . '../Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir($home_path . 'smarty/templates');
$smarty->setCompileDir($home_path . 'smarty/templates_c');
$smarty->setCacheDir($home_path . 'smarty/cache');
$smarty->setConfigDir($home_path . 'smarty/configs');



$smarty->assign('bodyID', 'thankyou');
//$smarty->assign('arrTimes', $timeSlots);
$smarty->display('thankyou.tpl');


