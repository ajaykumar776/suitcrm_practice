<?php
// created: 2024-06-26 11:46:32
$dictionary["clit_client_users_2"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'clit_client_users_2' => 
    array (
      'lhs_module' => 'CLIT_Client',
      'lhs_table' => 'clit_client',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'clit_client_users_2_c',
      'join_key_lhs' => 'clit_client_users_2clit_client_ida',
      'join_key_rhs' => 'clit_client_users_2users_idb',
    ),
  ),
  'table' => 'clit_client_users_2_c',
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
      'name' => 'clit_client_users_2clit_client_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'clit_client_users_2users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'clit_client_users_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'clit_client_users_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clit_client_users_2clit_client_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'clit_client_users_2_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'clit_client_users_2users_idb',
      ),
    ),
  ),
);