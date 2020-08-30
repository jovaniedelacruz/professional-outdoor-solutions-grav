<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Jovanie/Documents/Web_Development/professional-outdoor-solutions/professional-outdoor-solutions-grav-dev/user/themes/professional-outdoor-solutions-grav-theme/blueprints.yaml',
    'modified' => 1593004309,
    'data' => [
        'name' => 'Professional Outdoor Solutions Grav Theme',
        'slug' => 'professional-outdoor-solutions-grav-theme',
        'type' => 'theme',
        'version' => '0.5.6',
        'description' => 'Theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Jovanie De La Cruz',
            'email' => 'jovanie@xurweb.design',
            'url' => 'https://xurweb.design'
        ],
        'homepage' => 'https://github.com/jovaniedelacruz/professional-outdoor-solutions-grav-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/jovaniedelacruz/professional-outdoor-solutions-grav-theme/issues',
        'readme' => 'https://github.com/jovaniedelacruz/professional-outdoor-solutions-grav-theme/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
