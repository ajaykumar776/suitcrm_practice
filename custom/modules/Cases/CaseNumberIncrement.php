<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CaseNumberIncrement
{
    function setCaseNumber($bean, $event, $arguments)
    {
        $GLOBALS['log']->info("coming before");

        // if (empty($bean->case_number)) {
        //     $query = "SELECT MAX(case_number) as max_case_number FROM cases";
        //     $result = $GLOBALS['db']->query($query);
        //     $row = $GLOBALS['db']->fetchByAssoc($result);
        //     $max_case_number = $row['max_case_number'] + 9;
        //     $bean->case_number = $max_case_number;
        // }
    }
}
