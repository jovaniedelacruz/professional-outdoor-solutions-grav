<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/Jovanie/Documents/GitHub/professional-outdoor-solutions-grav/user/plugins/admin-addon-user-manager/blueprints/user/aaum-account.yaml',
    'modified' => 1592449378,
    'data' => [
        'extends@' => [
            'type' => 'user/account',
            'context' => 'blueprints://'
        ],
        'form' => [
            'fields' => [
                'security' => [
                    'unset-security@' => true
                ],
                'state' => [
                    'ordering@' => 'content',
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLED',
                    'classes' => 'twofa-toggle',
                    'highlight' => 'enabled',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'PLUGIN_ADMIN.YES',
                        'disabled' => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];
