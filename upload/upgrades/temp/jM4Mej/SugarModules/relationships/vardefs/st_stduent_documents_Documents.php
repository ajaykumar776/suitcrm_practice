<?php
// created: 2024-06-25 21:19:29
$dictionary["Document"]["fields"]["st_stduent_documents"] = array (
  'name' => 'st_stduent_documents',
  'type' => 'link',
  'relationship' => 'st_stduent_documents',
  'source' => 'non-db',
  'module' => 'St_Stduent',
  'bean_name' => false,
  'vname' => 'LBL_ST_STDUENT_DOCUMENTS_FROM_ST_STDUENT_TITLE',
  'id_name' => 'st_stduent_documentsst_stduent_ida',
);
$dictionary["Document"]["fields"]["st_stduent_documents_name"] = array (
  'name' => 'st_stduent_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ST_STDUENT_DOCUMENTS_FROM_ST_STDUENT_TITLE',
  'save' => true,
  'id_name' => 'st_stduent_documentsst_stduent_ida',
  'link' => 'st_stduent_documents',
  'table' => 'st_stduent',
  'module' => 'St_Stduent',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["st_stduent_documentsst_stduent_ida"] = array (
  'name' => 'st_stduent_documentsst_stduent_ida',
  'type' => 'link',
  'relationship' => 'st_stduent_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ST_STDUENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
