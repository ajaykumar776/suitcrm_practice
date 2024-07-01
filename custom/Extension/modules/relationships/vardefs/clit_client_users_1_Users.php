<?php
// created: 2024-06-26 11:44:49
$dictionary["User"]["fields"]["clit_client_users_1"] = array (
  'name' => 'clit_client_users_1',
  'type' => 'link',
  'relationship' => 'clit_client_users_1',
  'source' => 'non-db',
  'module' => 'CLIT_Client',
  'bean_name' => 'CLIT_Client',
  'vname' => 'LBL_CLIT_CLIENT_USERS_1_FROM_CLIT_CLIENT_TITLE',
  'id_name' => 'clit_client_users_1clit_client_ida',
);
$dictionary["User"]["fields"]["clit_client_users_1_name"] = array (
  'name' => 'clit_client_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CLIT_CLIENT_USERS_1_FROM_CLIT_CLIENT_TITLE',
  'save' => true,
  'id_name' => 'clit_client_users_1clit_client_ida',
  'link' => 'clit_client_users_1',
  'table' => 'clit_client',
  'module' => 'CLIT_Client',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["clit_client_users_1clit_client_ida"] = array (
  'name' => 'clit_client_users_1clit_client_ida',
  'type' => 'link',
  'relationship' => 'clit_client_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CLIT_CLIENT_USERS_1_FROM_CLIT_CLIENT_TITLE',
);
