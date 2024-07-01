<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CheckDuplicateContactNumbers
{
    public function checkDuplicate($bean, $event, $arguments)
    {
        $GLOBALS['log']->fatal(" " . $bean);

        $query = new SugarQuery();
        $query->from(BeanFactory::getBean('CNP_ContactNumbers'));
        $GLOBALS['log']->fatal("bean: " . $bean->name);

        $query->where()->equals('name', $bean->name);
        $existingContactNumbers = $query->execute();

        if (!empty($existingContactNumbers)) {
            // Prevent saving the duplicate contact number
            $GLOBALS['log']->fatal("Duplicate contact number detected: " . $bean->phone_no);
            throw new SugarApiExceptionInvalidParameter("A contact number with the same phone number already exists in this account.");
        }
    }
}
