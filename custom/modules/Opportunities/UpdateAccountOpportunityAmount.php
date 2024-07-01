<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UpdateAccountOpportunityAmount
{
    public function updateTotalAmount($bean, $event, $arguments)
    {
        // Logging start of the logic hook execution
        $GLOBALS['log']->info("Executing updateTotalAmount logic hook for Opportunity ID: " . $bean->id);
        
        $account_id = $bean->account_id;

        if (!empty($account_id)) {
            // Query to calculate total opportunity amount for the specific account
            $query = "SELECT SUM(o.amount) AS total_amount
                      FROM opportunities o
                      JOIN accounts_opportunities ao ON o.id = ao.opportunity_id
                      WHERE ao.account_id = '$account_id'
                      AND ao.deleted = 0";

            $db = DBManagerFactory::getInstance();
            $result = $db->query($query);
            $row = $db->fetchByAssoc($result);

            if ($row && isset($row['total_amount'])) {
                $total_amount = $row['total_amount'];

                // Log total amount retrieved
                $GLOBALS['log']->debug("Total opportunity amount for Account ID $account_id: $total_amount");

                // Load the Account bean and update the custom field total_opportunity_amount_c
                $account = BeanFactory::getBean('Accounts', $account_id);
                if (!empty($account)) {
                    // Update the custom field
                    $account->total_opportunity_amount_c = $total_amount; // Replace with your custom field name
                    $account->save();

                    // Log update success
                    $GLOBALS['log']->debug("total_opportunity_amount updated successfully for Account ID $account_id");
                } else {
                    // Log bean retrieval failure
                    $GLOBALS['log']->error("Failed to load Account bean for Account ID $account_id");
                }
            } else {
                // Log total amount query failure
                $GLOBALS['log']->error("Failed to retrieve total opportunity amount for Account ID $account_id");
            }
        } else {
            // Log empty account ID error
            $GLOBALS['log']->error("Empty Account ID received in updateTotalAmount logic hook");
        }
    }
}
?>
