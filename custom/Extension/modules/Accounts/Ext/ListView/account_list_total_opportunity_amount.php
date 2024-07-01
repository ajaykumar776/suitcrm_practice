<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.list.php');

class CustomAccountListView extends ViewList
{
    public function preDisplay()
    {
        parent::preDisplay();

        // Add custom column to list view
        $this->lv->select_fields = array_merge($this->lv->select_fields, array(
            'accounts_cstm.total_opportunity_amount',
        ));

        // Join custom table for custom field
        $this->lv->custom_table = " LEFT JOIN accounts_cstm ON accounts.id = accounts_cstm.id ";

        // Modify list view query
        $this->lv->select = "SELECT
                                accounts.id,
                                accounts.name,
                                accounts.date_entered,
                                accounts.date_modified,
                                accounts.assigned_user_id,
                                accounts_cstm.total_opportunity_amount AS total_opportunity_amount  // Alias for the custom field
                            FROM
                                accounts ";

        $this->lv->from = "FROM accounts ";

        // Set headers
        $this->lv->setup('Accounts', 'listview', $this->where, $this->params, false);
    }
}
