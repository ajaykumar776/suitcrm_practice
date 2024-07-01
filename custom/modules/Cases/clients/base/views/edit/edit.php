<?php


$viewdefs['Cases']['base']['view']['edit'] = array(
    'template' => 'edit',
    'buttons' => array(
        array(
            'name' => 'save_button',
            'type' => 'rowaction',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'icon' => 'fa-save',
        ),
        array(
            'name' => 'cancel_button',
            'type' => 'rowaction',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn btn-invisible btn-link',
            'icon' => 'fa-times',
        ),
    ),
    'panels' => array(
        array(
            'name' => 'panel_body',
            'label' => 'LBL_PANEL_BODY',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'newGroup' => false,
            'fields' => array(
                array(
                    'name' => 'country_c',
                    'label' => 'LBL_COUNTRY',
                ),
                array(
                    'name' => 'state_c',
                    'label' => 'LBL_STATE',
                ),
                array(
                    'name' => 'city_c',
                    'label' => 'LBL_CITY',
                ),
                // Add other fields as necessary
            ),
        ),
    ),
    'dependencies' => array(
        'js' => array(
            'custom/modules/Cases/clients/base/views/edit/edit.js',
        ),
    ),
);
