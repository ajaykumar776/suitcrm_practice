<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:11:37
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/include/EditView/actions_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ff699fbd68_30521328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '114d7dcdbee37afdb0637d558c4fff34b7ec2097' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/themes/SuiteP/include/EditView/actions_buttons.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682ff699fbd68_30521328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),1=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>
<div class="buttons">
    <?php if (!empty($_smarty_tpl->tpl_vars['form']->value) && !empty($_smarty_tpl->tpl_vars['form']->value['buttons'])) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form']->value['buttons'], 'button', false, 'val');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value => $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>$_smarty_tpl->tpl_vars['button']->value,'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value),'view'=>((string)$_smarty_tpl->tpl_vars['view']->value)),$_smarty_tpl);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"SAVE",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)),$_smarty_tpl);?>

        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"CANCEL",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)),$_smarty_tpl);?>

    <?php }?>
    {if $showVCRControl}
            <button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
                {$APP.LBL_SAVE_AND_CONTINUE}
            </button>
    {/if}
    <?php if (empty($_smarty_tpl->tpl_vars['form']->value['hideAudit']) || !$_smarty_tpl->tpl_vars['form']->value['hideAudit']) {?>
        <?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"Audit",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>((string)$_smarty_tpl->tpl_vars['form_id']->value)),$_smarty_tpl);?>

    <?php }?>
    <?php echo smarty_function_sugar_action_menu(array('buttons'=>$_smarty_tpl->tpl_vars['footer_buttons']->value,'class'=>"fancymenu",'flat'=>true),$_smarty_tpl);?>


</div>
<?php }
}