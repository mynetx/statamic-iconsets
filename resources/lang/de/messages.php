<?php

return [
    'section' => [
        'selection' => 'Auswahl',
    ],
    'fields' => [
        'directory' => [
            'display' => 'Verzeichnis',
            'instructions' => 'Basisverzeichnis für Icon-Ordner (relativ zum Projekt-Root)',
        ],
        'folders' => [
            'display' => 'Ordner',
            'instructions' => 'Array von Ordnernamen aus dem Basisverzeichnis',
        ],
        'default' => [
            'display' => 'Standardwert',
            'instructions' => 'Standard-Icon im Format: ordner/dateiname (ohne .svg-Erweiterung)',
        ],
    ],
    'ui' => [
        'search_placeholder' => 'Icons durchsuchen...',
        'loading' => 'Icons werden geladen...',
    ],
];
