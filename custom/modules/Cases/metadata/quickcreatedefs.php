<?php
$viewdefs ['Cases'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'comment' => 'Visual unique identifier',
            'studio' => 
            array (
              'quickcreate' => false,
            ),
            'label' => 'LBL_NUMBER',
          ),
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'suggestion_box',
            'label' => 'LBL_SUGGESTION_BOX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'city_c',
            'label' => 'LBL_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'account_name',
        ),
      ),
    ),
  ),
);
;
?>
