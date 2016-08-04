<?php

/**
 * Custom dropdown control settings
 */
$wp_customize->add_setting( 'setting_id', array (
    'default' => 'key1'
) );

$wp_customize->add_control(
    new Inspiry_Dropdown_Control(
        $wp_customize,
        'setting_id',
        array(
            'label' => __( 'Custom Dropdown Control' ),
            'section' => 'section_id',
            'settings' => 'setting_id',
            'choices' => array(
                'key1' => 'Value 1',
                'key2' => 'Value 2',
                'key3' => 'Value 3',
            )
        )
    )
);