<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:11:52
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/include/DetailView/actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ff785ce1c3_11797412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4f8aec61fee20219c0a3fc7f042fc6f89300f0' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/include/DetailView/actions_menu.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682ff785ce1c3_11797412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),1=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>
<ul class="dropdown-menu">
    <?php if (!(isset($_smarty_tpl->tpl_vars['form']->value['buttons']))) {?>
    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"EDIT",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DUPLICATE",'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"DELETE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <?php } else { ?>
    <?php echo smarty_function_counter(array('assign'=>"num_buttons",'start'=>0,'print'=>false),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
    <?php if (!is_array($_smarty_tpl->tpl_vars['button']->value) && in_array($_smarty_tpl->tpl_vars['button']->value,$_smarty_tpl->tpl_vars['built_in_buttons']->value)) {?>
    <?php echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>

    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php if (count($_smarty_tpl->tpl_vars['form']->value['buttons']) > $_smarty_tpl->tpl_vars['num_buttons']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
    <?php if (is_array($_smarty_tpl->tpl_vars['button']->value) && $_smarty_tpl->tpl_vars['button']->value['customCode']) {?>
    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {?>
    <li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>"EditView",'form_id'=>"formDetailView"),$_smarty_tpl);?>
</li>
    <?php }?>
    <?php }?>
</ul>
<?php }
}
