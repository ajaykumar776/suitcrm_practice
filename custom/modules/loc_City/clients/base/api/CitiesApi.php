<?php


// custom/modules/Cities/clients/base/api/CitiesApi.php
class CitiesApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'getCitiesByState' => array(
                'reqType' => 'GET',
                'path' => array('Cities', 'getCitiesByState'),
                'pathVars' => array('', ''),
                'method' => 'getCitiesByState',
                'shortHelp' => 'Get cities by state ID',
                'longHelp' => '',
            ),
        );
    }

    public function getCitiesByState($api, $args)
    {
        $state_id = $args['state_id'];
        $cityBean = BeanFactory::getBean('Cities');
        $query = new SugarQuery();
        $query->select(array('id', 'name'));
        $query->from($cityBean);
        $query->where()->equals('state_id', $state_id);
        $results = $query->execute();

        $options = "<option value=''>Select City</option>";
        foreach ($results as $result) {
            $options .= "<option value='{$result['id']}'>{$result['name']}</option>";
        }

        return $options;
    }
}
