<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Jovanie/Documents/GitHub/professional-outdoor-solutions-grav/user/themes/professional-outdoor-solutions/blueprints.yaml',
    'modified' => 1586126344,
    'data' => [
        'name' => 'Professional Outdoor Solutions',
        'version' => '0.0.1',
        'description' => 'Theme for Professional Outdoor Solutions',
        'author' => [
            'name' => 'Jovanie De La Cruz',
            'email' => 'jovaniedelacruz@gmail.com',
            'url' => 'https://xurweb.design',
            'custom_logo' => [
                'type' => 'file',
                'label' => 'Custom Logo',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'markdown' => true,
                'description' => 'Will be used instead of default logo `theme://images/grav-logo.svg`',
                'accept' => [
                    0 => 'image/*'
                ]
            ],
            'custom_logo_mobile' => [
                'type' => 'file',
                'label' => 'Mobile Custom Logo',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ]
            ]
        ]
    ]
];
