<?php
/**
 * Markus Hofmann
 * 03.11.21 12:48
 * persisted_sanitized_routing
 */


$EM_CONF['persisted_sanitized_routing'] = [
    'title' => 'Persisted Sanitized Pattern Aspect for routing',
    'description' => 'Adds a sanitized pattern mapper aspect to the routing feature for TYPO3',
    'category' => 'plugin',
    'author' => 'Markus Hofmann',
    'author_email' => 'typo3@calien.de',
    'state' => 'beta',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.4',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'PSR-4' => [
            'Calien\\PersistedSanitizedRouting\\' => 'Classes'
        ]
    ]
];