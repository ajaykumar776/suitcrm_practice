<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class DeleteAssociatedAccounts
{
    public function deleteAccountsOnOpportunityDelete($bean, $event, $arguments)
    {
        if ($event == 'before_delete') {
            $opportunity_id = $bean->id;

            // Query to find accounts associated with the opportunity
            $query = "SELECT account_id FROM accounts_opportunities WHERE opportunity_id = '{$opportunity_id}' AND deleted = 0";
            $db = DBManagerFactory::getInstance();
            $result = $db->query($query);

            if ($result && $db->getRowCount($result) > 0) {
                while ($row = $db->fetchByAssoc($result)) {
                    $account_id = $row['account_id'];
                    $account = BeanFactory::getBean('Accounts', $account_id);
                    if (!empty($account)) {
                        $GLOBALS['log']->info("Deleting Account ID $account_id due to Opportunity deletion.");
                        $account->mark_deleted($account_id); // Soft delete the account
                    }
                }
            }
        }
    }
}
?>
