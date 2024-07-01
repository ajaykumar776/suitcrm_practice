<?php
// created: 2024-06-30 11:05:35
$dictionary["loc_state_loc_city"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'loc_state_loc_city' => 
    array (
      'lhs_module' => 'loc_State',
      'lhs_table' => 'loc_state',
      'lhs_key' => 'id',
      'rhs_module' => 'loc_City',
      'rhs_table' => 'loc_city',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'loc_state_loc_city_c',
      'join_key_lhs' => 'loc_state_loc_cityloc_state_ida',
      'join_key_rhs' => 'loc_state_loc_cityloc_city_idb',
    ),
  ),
  'table' => 'loc_state_loc_city_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'loc_state_loc_cityloc_state_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'loc_state_loc_cityloc_city_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'loc_state_loc_cityspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'loc_state_loc_city_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'loc_state_loc_cityloc_state_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'loc_state_loc_city_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'loc_state_loc_cityloc_city_idb',
      ),
    ),
  ),
);