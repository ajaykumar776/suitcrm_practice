<?php
// created: 2024-06-30 11:05:35
$dictionary["loc_country_loc_state"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'loc_country_loc_state' => 
    array (
      'lhs_module' => 'loc_Country',
      'lhs_table' => 'loc_country',
      'lhs_key' => 'id',
      'rhs_module' => 'loc_State',
      'rhs_table' => 'loc_state',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'loc_country_loc_state_c',
      'join_key_lhs' => 'loc_country_loc_stateloc_country_ida',
      'join_key_rhs' => 'loc_country_loc_stateloc_state_idb',
    ),
  ),
  'table' => 'loc_country_loc_state_c',
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
      'name' => 'loc_country_loc_stateloc_country_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'loc_country_loc_stateloc_state_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'loc_country_loc_statespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'loc_country_loc_state_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'loc_country_loc_stateloc_country_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'loc_country_loc_state_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'loc_country_loc_stateloc_state_idb',
      ),
    ),
  ),
);