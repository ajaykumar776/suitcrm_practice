<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:12:53
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/modules/SavedSearch/SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ffb5d3aaa0_52449591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7095218b6162b7ef2a071e8ce9e836dd70d790' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682ffb5d3aaa0_52449591 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
