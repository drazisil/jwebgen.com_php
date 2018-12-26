<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 03:47:06
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/changelog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249631748527ccfae16d796-23712015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872317b505cbbbacdcd5b4e117258c594a0c203a' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/changelog.tpl',
      1 => 1401812500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249631748527ccfae16d796-23712015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527ccfae1b4a56_77947434',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ccfae1b4a56_77947434')) {function content_527ccfae1b4a56_77947434($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Revision log</title>
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
            <div>Changelog</div>
            <div>
                <ul>
                    <li>Version 5.2 - 2007-12-25<br />
                        Added Scolorized to the Starter Generator
                    <li>Version 5.1 - 2007-12-25<br />
                        Added Pcolorized to the Starter Generator</li>
                    <li>Version 5.0 - 2007-12-25<br />
                        Added colorized to Dream Generator</li>
                    <li>Version 4.0.1 - 2007-09-28<br/>
                        Edited Doomspark's credit link to point to his website.<br/>
                    <li>Version 4.0 - 2007-09-27<br/>
                        Moved JWebGen to it's own domain.<br/>
                    <li>Version 3.1 - 2007-08-22<br/>
                        Added tabs to all result pages.<br/>
                        Corrected small layout problems with Starter and Breed results.<br/>
                        Added markings so Parents are not confused with Baby on Starter and Breed.
                    <li>Version 3.0.0000001 - 2007-08-22<br/>
                        Discovered that IE doesn't like if OPTIONS don't have VALUEs in SELECTS.<br/>
                        (Translation: Generate works in IE now x.x)
                    <li>Version 3.0 - 2007-08-28<br/>
                        Generate pony now appears in same window.
                    <li>Version 2.6 - 2007-08-26<br/>
                        Added visible S-Genes to Lookup.
                    <li>Version 2.5.5 - 2007-08-25<br/>
                        Added Genny, the winner of the JWebGen mascot contest.<br/>
                        You can find her on the Love page.
                    <li>Version 2.5 - 2007-08-25<br/>
                        Added BBCode to pony url so they are ready to paste into PI.<br/>
                        Lookup url is a clickable image in the Pony URL.
                    <li>Version 2.4 - 2007-08-24<br/>
                        Added pony URL to Generate, Starter and Breed<br/>
                        Adjusted sizes on Starter and Breed so parents were smaller then baby<br/>
                    <li>Version 2.3 - 2007-08-18<br/>
                        Added Baby and Adult options to pony Lookup.<br/>
                        Changed wording from 'decode' to 'lookup'.
                    <li>Version 2.2 - 2007-08-17<br/>
                        Added Babies to Breed.
                    <li>Version 2.1 - 2007-08-17<br/>
                        Added Adults to Generate.
                    <li>Version 2.0 - 2007-08-16<br/>
                        Starter now conforms to PI spec.
                    <li>Version 1.3 - 2007-08-16<br/>
                        Added KirinPonies to Starter and Generate.<br/>
                        Added Extra 1 and Extra to Generate.<br/>
                        Added donate button.
                    <li>Version 1.2 - 2007-05-27<br/>
                        Added visible and carrier sgenes to Starter
                    <li>Version 1.1 - 2007-05-26<br/>
                        Added reload buttons to Starter and Breed
                    </li>
                    <li>Version 1.0 - 2007-05-26</li>
                </ul>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>