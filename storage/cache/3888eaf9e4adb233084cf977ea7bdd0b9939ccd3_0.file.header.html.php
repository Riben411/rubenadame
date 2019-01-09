<?php
/* Smarty version 3.1.33, created on 2019-01-07 20:24:23
  from 'C:\xampp\htdocs\rubenadame\views\inc\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c33a7671cb810_60748809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3888eaf9e4adb233084cf977ea7bdd0b9939ccd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rubenadame\\views\\inc\\header.html',
      1 => 1546889043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/inc/dependencies.html' => 1,
  ),
),false)) {
function content_5c33a7671cb810_60748809 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Ruben Adame" content="Aprende de Network Marketing y Vida Saludable">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:views/inc/dependencies.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="shortcut icon" href="storage/thumbs/favicon.ico">
  </head>

<div class="container">

</div>
  <body>

    <header>
      <div class="icono">
        <img src="storage/images/ruben-1.gif" alt="Usuario">
      </div>
      <hgroup>
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['firma']->value;?>
</h2>
      </hgroup>
        <nav>
          <ul>
            <li><a href="index">Inicio</a></li>
            <li><a href="views/templates/formulario.html">Blog</a>
            </li>
            <li><a href="#">Galeria</a></li>
            <li><a href="#">Eventos</a></li>
          </ul>
        </nav>
    </header>
<?php }
}
