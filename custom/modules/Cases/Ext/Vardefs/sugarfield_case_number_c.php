<?php
$dictionary['Case']['fields']['case_number'] = array (
    'name' => 'case_number',
    'vname' => 'LBL_CASE_NUMBER',
    'type' => 'varchar',
    'len' => '255',
    'readonly' => true,
    'duplicate_merge' => 'disabled',
    'reportable' => true,
    'importable' => 'false',
    'disable_num_format' => true,
    'full_text_search' => array (
        'boost' => '3',
        'enabled' => true,
    ),
);
