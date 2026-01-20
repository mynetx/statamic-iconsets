<?php

return [
    'section' => [
        'selection' => 'Selection',
    ],
    'fields' => [
        'directory' => [
            'display' => 'Directory',
            'instructions' => 'Base directory containing icon folders (relative to project root)',
        ],
        'folders' => [
            'display' => 'Folders',
            'instructions' => 'Array of folder names to include from the base directory',
        ],
        'default' => [
            'display' => 'Default Value',
            'instructions' => 'Default icon in format: folder/filename (without .svg extension)',
        ],
    ],
    'ui' => [
        'search_placeholder' => 'Search icons...',
        'loading' => 'Loading icons...',
    ],
];
