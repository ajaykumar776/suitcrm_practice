<?php
$hook_version = 1;
$hook_array = array();
$hook_array['after_entry_point'] = array();
$hook_array['after_entry_point'][] = array(
    1,
    'Register custom API endpoints',
    'custom/modules/Accounts/clients/base/api/AccountCustomApi.php',
    'AccountCustomApi',
    'registerApiRest',
);
?>
