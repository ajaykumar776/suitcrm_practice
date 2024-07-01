<?php
/* Smarty version 4.3.1, created on 2024-07-01 21:12:53
  from '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/themes/SuiteP/modules/Cases/SearchForm_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6682ffb5d70850_88542710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62fe6c04dfa97c957e18e0b278698d0c774cce15' => 
    array (
      0 => '/opt/lampp/htdocs/SuiteCRM-7.14.4/cache/themes/SuiteP/modules/Cases/SearchForm_basic.tpl',
      1 => 1719861173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6682ffb5d70850_88542710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/opt/lampp/htdocs/SuiteCRM-7.14.4/include/Smarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (!(isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']))) {?>
	<?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']);
}
echo '<script'; ?>
>

	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});

<?php echo '</script'; ?>
>
<div class="row">
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='name_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'Cases'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
' size='30'
    maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='-1'      accesskey='9'  >

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='current_user_only_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENT_USER_FILTER','module'=>'Cases'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['current_user_only_basic']['name'];?>
" 
value="1" title='' tabindex="-1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='open_only_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_OPEN_ITEMS','module'=>'Cases'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['open_only_basic']['name'];?>
" 
value="1" title='' tabindex="-1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='favorites_only_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAVORITES_FILTER','module'=>'Cases'),$_smarty_tpl);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['favorites_only_basic']['name'];?>
" 
value="1" title='' tabindex="-1" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
			<?php if ($_smarty_tpl->tpl_vars['HAS_ADVANCED_SEARCH']->value && !$_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_FILTER'];?>
</a>
			<?php }?>
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
'></div>
	</div>
</div>
<?php echo '<script'; ?>
>
	
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search');
		});
	});
	
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_account_name_basic']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["search_form_account_name_basic","account_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_contact_created_by_name_basic']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_created_by_name_basic","contact_created_by_id_basic","contact_created_by_id_basic","contact_created_by_id_basic"],"required_list":["contact_created_by_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}