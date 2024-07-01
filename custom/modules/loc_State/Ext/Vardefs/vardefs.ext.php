<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-06-30 11:05:35
$dictionary["loc_State"]["fields"]["loc_state_loc_city"] = array (
  'name' => 'loc_state_loc_city',
  'type' => 'link',
  'relationship' => 'loc_state_loc_city',
  'source' => 'non-db',
  'module' => 'loc_City',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_LOC_STATE_LOC_CITY_FROM_LOC_CITY_TITLE',
);


// created: 2024-06-30 11:05:35
$dictionary["loc_State"]["fields"]["loc_country_loc_state"] = array (
  'name' => 'loc_country_loc_state',
  'type' => 'link',
  'relationship' => 'loc_country_loc_state',
  'source' => 'non-db',
  'module' => 'loc_Country',
  'bean_name' => false,
  'vname' => 'LBL_LOC_COUNTRY_LOC_STATE_FROM_LOC_COUNTRY_TITLE',
  'id_name' => 'loc_country_loc_stateloc_country_ida',
);
$dictionary["loc_State"]["fields"]["loc_country_loc_state_name"] = array (
  'name' => 'loc_country_loc_state_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LOC_COUNTRY_LOC_STATE_FROM_LOC_COUNTRY_TITLE',
  'save' => true,
  'id_name' => 'loc_country_loc_stateloc_country_ida',
  'link' => 'loc_country_loc_state',
  'table' => 'loc_country',
  'module' => 'loc_Country',
  'rname' => 'name',
);
$dictionary["loc_State"]["fields"]["loc_country_loc_stateloc_country_ida"] = array (
  'name' => 'loc_country_loc_stateloc_country_ida',
  'type' => 'link',
  'relationship' => 'loc_country_loc_state',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LOC_COUNTRY_LOC_STATE_FROM_LOC_STATE_TITLE',
);

?>