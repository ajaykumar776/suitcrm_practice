<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:13:37
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/include/InlineEditing/CasesEditViewcountry_c.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ffe11c5046_50663111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4ec3a8fd11d41f9a94bf6ff5077c3479394672f' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/include/InlineEditing/CasesEditViewcountry_c.tpl',
      1 => 1719861217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682ffe11c5046_50663111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['country_c']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['country_c']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['country_c']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['country_c']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['country_c']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['country_c']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['country_c']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
