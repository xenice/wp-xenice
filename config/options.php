<?php
return [
    [
        'id'=>'home',
        'name'=>_t('Home'),
        'title'=>_t('Home Settings'),
        'fields'=>[
            [
                'id'   => 'description',
                'name' => _t('Description'),
                'type'  => 'textarea',
                'style' => 'regular',
                'value' => '',
                'rows' => 3
                
            ],
            [
                'id'   => 'keywords',
                'name' => _t('Keywords'),
                'type'  => 'textarea',
                'style' => 'regular',
                'value' => '',
                'rows' => 3
            ]
        ]
    ]
];