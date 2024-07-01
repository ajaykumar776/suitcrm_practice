<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-06-30 11:05:35
$dictionary["loc_City"]["fields"]["loc_state_loc_city"] = array (
  'name' => 'loc_state_loc_city',
  'type' => 'link',
  'relationship' => 'loc_state_loc_city',
  'source' => 'non-db',
  'module' => 'loc_State',
  'bean_name' => false,
  'vname' => 'LBL_LOC_STATE_LOC_CITY_FROM_LOC_STATE_TITLE',
  'id_name' => 'loc_state_loc_cityloc_state_ida',
);
$dictionary["loc_City"]["fields"]["loc_state_loc_city_name"] = array (
  'name' => 'loc_state_loc_city_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LOC_STATE_LOC_CITY_FROM_LOC_STATE_TITLE',
  'save' => true,
  'id_name' => 'loc_state_loc_cityloc_state_ida',
  'link' => 'loc_state_loc_city',
  'table' => 'loc_state',
  'module' => 'loc_State',
  'rname' => 'name',
);
$dictionary["loc_City"]["fields"]["loc_state_loc_cityloc_state_ida"] = array (
  'name' => 'loc_state_loc_cityloc_state_ida',
  'type' => 'link',
  'relationship' => 'loc_state_loc_city',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LOC_STATE_LOC_CITY_FROM_LOC_CITY_TITLE',
);

?>