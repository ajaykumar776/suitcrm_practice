<?php

$viewdefs['Cases']['EditView'] = array(
    'templateMeta' => array(
        'includes' => array(
            array('file' => 'custom/modules/Cases/js/dependentDropdowns.js'),
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
        'default' => array(
            array('name', 'priority'),
            array('status', 'account_name'),
            array('country_c', 'state_c'),
            array('city_c', 'description'),
        ),
    ),
);

