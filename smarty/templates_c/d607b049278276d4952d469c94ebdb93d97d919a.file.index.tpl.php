<?php /* Smarty version Smarty-3.1.12, created on 2016-12-17 14:32:02
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11672183085540966779b842-36421049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd607b049278276d4952d469c94ebdb93d97d919a' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/index.tpl',
      1 => 1482006715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11672183085540966779b842-36421049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55409667810798_59922284',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55409667810798_59922284')) {function content_55409667810798_59922284($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>JWebGen Pony Generator</title>
  <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
  <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
  <meta name="Author" content="jwbecher@jwebnet.net">
  <link rel="shortcut icon" href="/assets/favicon.ico">
  <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
  <script type="text/javascript" src="/assets/google_analytics.js"></script>
  <script type="text/javascript" src="/assets/support_banner.js"></script>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

<?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="content">
<h1>JWebGen Pony Generator</h1>

<p>This pony generator lets you create your dream pony, test generate a starter
pony, or see what the pony of two existing parents looks like.<br>
<span style="color: #ff0000;">The images used on this site are owned and
copyrighted by <a href="http://ponyisland.net">ponyisland.net</a> and are used
with permission.<br>
Any use of these images outside of this site requires permission from
ponyisland.net.</span> This website is not supported by PonyIsland and carries
no warranty. <br></p>
<h2>Section Overview</h2>

<ul>
  <li><a href="lookup">Lookup</a><br>
    Locate pony information by url or id number</li>
  <li><a href="generate">Generate</a><br>
    Dream pony generator (Image can be saved)</li>
  <li><a href="starter">Starter</a><br>
    Starter test pony generator (Image can be saved)</li>
  <li><a href="breed">Breed</a><br>
    Breed any two ponies and see what that baby looks like (Image can be
  saved)</li>
  <li><a href="love">Love</a><br>
    If you like JWebGen Pony Generator please consider a donation or a
  link.</li>
</ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>