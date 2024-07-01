<?php

// custom/modules/States/clients/base/api/StatesApi.php
class StatesApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'getStatesByCountry' => array(
                'reqType' => 'GET',
                'path' => array('States', 'getStatesByCountry'),
                'pathVars' => array('', ''),
                'method' => 'getStatesByCountry',
                'shortHelp' => 'Get states by country ID',
                'longHelp' => '',
            ),
        );
    }

    public function getStatesByCountry($api, $args)
    {
        $country_id = $args['country_id'];
        $stateBean = BeanFactory::getBean('States');
        $query = new SugarQuery();
        $query->select(array('id', 'name'));
        $query->from($stateBean);
        $query->where()->equals('country_id', $country_id);
        $results = $query->execute();

        $options = "<option value=''>Select State</option>";
        foreach ($results as $result) {
            $options .= "<option value='{$result['id']}'>{$result['name']}</option>";
        }

        return $options;
    }
}
