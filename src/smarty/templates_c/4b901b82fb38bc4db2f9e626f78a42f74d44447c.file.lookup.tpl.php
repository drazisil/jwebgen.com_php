<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 03:43:48
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/lookup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259522597527cd09c990a78-14457617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b901b82fb38bc4db2f9e626f78a42f74d44447c' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/lookup.tpl',
      1 => 1402182216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259522597527cd09c990a78-14457617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527cd09c9f2354_49536018',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527cd09c9f2354_49536018')) {function content_527cd09c9f2354_49536018($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Lookup a pony</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <link rel="stylesheet" href="assets/screen.css" type="text/css"/>

        <script type="text/javascript" src="/assets/js.php?page=lookup"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
    </head>

    <body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

        <?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="content">
            <div>
                <table>
                    <tr>
                        <td  id="tdponyLookupForm">
                            <form name="ponyLookupForm" id="ponyLookupForm" method="get" action="controller.php" onsubmit="return ajaxQuery('GET', generateLookupURL(), 'ponyLookupZone');
                                    return false;">
                                <table>
                                    <tr>
                                        <td>Please paste the profile or image URL </td>
                                        <td><input type="text" size="20" maxlength="255" name="ponyurl" id="ponyurl"/></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>OR</td>
                                    </tr>
                                    <tr>
                                        <td>Please post the Pony ID </td>
                                        <td><input type="text" size="20" maxlength="20" id="ponyid" name="ponyid"/></td>
                                    </tr>
                                    <tr>
                                        <td>Would you like an adult or baby image? </td>
                                        <td>
                                            <select id="idage" name="idage">
                                                <option value="Adult" selected="selected">Adult</option>
                                                <option value="Baby">Baby</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input name="nextAction" value="ponyLookup" type="hidden"/>
                                            <input name="DecodeByIDExport" id="DecodeByIDExport" value="Lookup" type="submit"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                        <td><div id="ponyLookupZone"></div></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>