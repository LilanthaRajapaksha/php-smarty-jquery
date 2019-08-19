<?php

require_once('libs/smarty-3.1.33/libs/Smarty.class.php');
require_once('constants.php');

$smarty = new Smarty();
$smarty->setTemplateDir('views');
$smarty->setCompileDir('tmp');

// data array
$array = [
    'U0001' => 'User 1',
    'U0002' => 'User 2',
    'U0003' => 'User 3',
    'U0004' => 'User 4',
    'U0005' => 'User 5'
];

// assign data
$smarty->assign('users', $array);

// assign document get ready execute function name
$smarty->assign('exec_on_ready', array(array('function_name' => 'showWelcomeMessage')));

// assign js files
$smarty->assign('pageJs', array(JS . 'scripts.js'));

$files = ['header.tpl' ,'index.tpl', 'footer.tpl'];

foreach ($files as $file){
    $smarty->display($file);
}
