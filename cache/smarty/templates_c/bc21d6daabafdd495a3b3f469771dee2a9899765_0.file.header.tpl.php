<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:11:37
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/tpls/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ff6981ba87_96598267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc21d6daabafdd495a3b3f469771dee2a9899765' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/tpls/header.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/SuiteP/tpls/_head.tpl' => 1,
    'file:themes/SuiteP/tpls/_headerModuleList.tpl' => 1,
  ),
),false)) {
function content_6682ff6981ba87_96598267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:themes/SuiteP/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body onMouseOut="closeMenus();">

<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
    <div id="ajaxHeader">
        <?php $_smarty_tpl->_subTemplateRender("file:themes/SuiteP/tpls/_headerModuleList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php }?>

<input id='ajaxUI-history-field' type='hidden'>
<?php echo '<script'; ?>
 type='text/javascript'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
        YAHOO.util.History.register('ajaxUILoc', "", SUGAR.ajaxUI.go);
        <?php if ((isset($_REQUEST['module'])) && $_REQUEST['module'] != "ModuleBuilder") {?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php }?>
    }
<?php echo '</script'; ?>
>

<!-- Start of page content -->
<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
<div id="bootstrap-container"
     class="<?php if ($_smarty_tpl->tpl_vars['THEME_CONFIG']->value['display_sidebar'] && (!(isset($_COOKIE['sidebartoggle'])) || $_COOKIE['sidebartoggle'] != 'collapsed')) {?>col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2<?php }?> main bootstrap-container">
    <div id="content" class="content">
        <div id="pagecontent" class=".pagecontent" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
">
<?php }
}
}
