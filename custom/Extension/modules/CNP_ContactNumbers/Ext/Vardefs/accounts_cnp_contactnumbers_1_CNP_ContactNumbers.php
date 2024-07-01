<?php
// created: 2024-06-27 20:09:10
$dictionary["CNP_ContactNumbers"]["fields"]["accounts_cnp_contactnumbers_1"] = array (
  'name' => 'accounts_cnp_contactnumbers_1',
  'type' => 'link',
  'relationship' => 'accounts_cnp_contactnumbers_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_CNP_CONTACTNUMBERS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_cnp_contactnumbers_1accounts_ida',
);
$dictionary["CNP_ContactNumbers"]["fields"]["accounts_cnp_contactnumbers_1_name"] = array (
  'name' => 'accounts_cnp_contactnumbers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CNP_CONTACTNUMBERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_cnp_contactnumbers_1accounts_ida',
  'link' => 'accounts_cnp_contactnumbers_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CNP_ContactNumbers"]["fields"]["accounts_cnp_contactnumbers_1accounts_ida"] = array (
  'name' => 'accounts_cnp_contactnumbers_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cnp_contactnumbers_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CNP_CONTACTNUMBERS_1_FROM_CNP_CONTACTNUMBERS_TITLE',
);
