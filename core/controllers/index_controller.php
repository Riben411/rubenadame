<?php
$smarty = new Smarty();

$view[0]['url'] = 'inicio.php';
$view[0]['nombre'] = 'Inicio';

$t = 'Ruben Adame';
$tra = 'Especialista en Network Marketing';

$smarty->assign('view', $view);
$smarty->assign('title', $t);
$smarty->assign('firma', $tra);

$smarty->display("views/index.html");
