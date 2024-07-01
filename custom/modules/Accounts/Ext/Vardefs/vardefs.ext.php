<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Account']['fields']['country_id'] = array(
    'name' => 'country_id',
    'vname' => 'LBL_COUNTRY',
    'type' => 'enum',
    'options' => 'country_list',
    'audited' => true,
    'required' => true,
    'importable' => 'true',
    'reportable' => true,
);

$dictionary['Account']['fields']['state_id'] = array(
    'name' => 'state_id',
    'vname' => 'LBL_STATE',
    'type' => 'enum',
    'options' => 'state_list',
    'audited' => true,
    'required' => true,
    'importable' => 'true',
    'reportable' => true,
);

$dictionary['Account']['fields']['city_id'] = array(
    'name' => 'city_id',
    'vname' => 'LBL_CITY',
    'type' => 'enum',
    'options' => 'city_list',
    'audited' => true,
    'required' => true,
    'importable' => 'true',
    'reportable' => true,
);



// created: 2024-06-27 20:09:10
$dictionary["Account"]["fields"]["accounts_cnp_contactnumbers_1"] = array (
  'name' => 'accounts_cnp_contactnumbers_1',
  'type' => 'link',
  'relationship' => 'accounts_cnp_contactnumbers_1',
  'source' => 'non-db',
  'module' => 'CNP_ContactNumbers',
  'bean_name' => 'CNP_ContactNumbers',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CNP_CONTACTNUMBERS_1_FROM_CNP_CONTACTNUMBERS_TITLE',
);


 // created: 2024-06-25 21:02:13
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2024-06-25 21:02:15
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2024-06-25 21:02:14
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2024-06-30 20:10:43
$dictionary['Account']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2024-06-30 20:10:43
$dictionary['Account']['fields']['total_opportunity_amount_c']['inline_edit']='1';
$dictionary['Account']['fields']['total_opportunity_amount_c']['labelValue']='Total opportunity amount';

 

 // created: 2024-06-25 21:02:15
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 
?>