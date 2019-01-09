<?
$view_form = new Smarty();

$formulario[0]['url'] = 'form.php';
$formulario[1]['nombre'] = 'formulario';


$view_form->assign('formulario', $formulario);
$view_form->display('views/templates/formulario.html');
