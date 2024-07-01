<?php
// created: 2024-06-26 11:46:32
$dictionary["CLIT_Client"]["fields"]["clit_client_users_2"] = array (
  'name' => 'clit_client_users_2',
  'type' => 'link',
  'relationship' => 'clit_client_users_2',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_USERS_TITLE',
  'id_name' => 'clit_client_users_2users_idb',
);
$dictionary["CLIT_Client"]["fields"]["clit_client_users_2_name"] = array (
  'name' => 'clit_client_users_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'clit_client_users_2users_idb',
  'link' => 'clit_client_users_2',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["CLIT_Client"]["fields"]["clit_client_users_2users_idb"] = array (
  'name' => 'clit_client_users_2users_idb',
  'type' => 'link',
  'relationship' => 'clit_client_users_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_USERS_TITLE',
);
