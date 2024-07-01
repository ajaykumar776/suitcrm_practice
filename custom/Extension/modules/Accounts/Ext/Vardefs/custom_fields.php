<?php
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
?>
