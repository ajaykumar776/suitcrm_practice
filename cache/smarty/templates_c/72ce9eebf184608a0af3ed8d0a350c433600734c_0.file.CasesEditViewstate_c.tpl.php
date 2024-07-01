<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:14:28
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/include/InlineEditing/CasesEditViewstate_c.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6683001422b996_84618641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ce9eebf184608a0af3ed8d0a350c433600734c' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/include/InlineEditing/CasesEditViewstate_c.tpl',
      1 => 1719861268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6683001422b996_84618641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['state_c']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['state_c']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['state_c']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['state_c']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['state_c']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['state_c']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['state_c']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
