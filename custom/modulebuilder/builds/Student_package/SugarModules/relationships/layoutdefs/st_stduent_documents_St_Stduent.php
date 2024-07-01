<?php
 // created: 2024-06-26 09:46:34
$layout_defs["St_Stduent"]["subpanel_setup"]['st_stduent_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ST_STDUENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
  'get_subpanel_data' => 'st_stduent_documents',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
