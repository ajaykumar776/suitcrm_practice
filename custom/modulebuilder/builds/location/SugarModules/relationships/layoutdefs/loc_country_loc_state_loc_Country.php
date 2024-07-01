<?php
 // created: 2024-06-30 11:05:35
$layout_defs["loc_Country"]["subpanel_setup"]['loc_country_loc_state'] = array (
  'order' => 100,
  'module' => 'loc_State',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LOC_COUNTRY_LOC_STATE_FROM_LOC_STATE_TITLE',
  'get_subpanel_data' => 'loc_country_loc_state',
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
