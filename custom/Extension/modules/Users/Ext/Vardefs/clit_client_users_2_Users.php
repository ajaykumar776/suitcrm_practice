<?php
// created: 2024-06-26 11:46:32
$dictionary["User"]["fields"]["clit_client_users_2"] = array (
  'name' => 'clit_client_users_2',
  'type' => 'link',
  'relationship' => 'clit_client_users_2',
  'source' => 'non-db',
  'module' => 'CLIT_Client',
  'bean_name' => 'CLIT_Client',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_CLIT_CLIENT_TITLE',
  'id_name' => 'clit_client_users_2clit_client_ida',
);
$dictionary["User"]["fields"]["clit_client_users_2_name"] = array (
  'name' => 'clit_client_users_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_CLIT_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'clit_client_users_2clit_client_ida',
  'link' => 'clit_client_users_2',
  'table' => 'clit_client',
  'module' => 'CLIT_Client',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["clit_client_users_2clit_client_ida"] = array (
  'name' => 'clit_client_users_2clit_client_ida',
  'type' => 'link',
  'relationship' => 'clit_client_users_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CLIT_CLIENT_USERS_2_FROM_CLIT_CLIENT_TITLE',
);
