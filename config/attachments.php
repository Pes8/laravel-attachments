<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | Determine whether or not to automatically define attachments routes.
    | Used for local storage only as other storage should define their public URL.
    |
    */
    'routes' => [
        'publish' => true,
        'prefix' => 'attachments',
        'middleware' => 'web',
        'pattern' => '/{id}/{name}',
        'dropzone' => [
            'upload_pattern' => '/dropzone',
            'delete_pattern' => '/dropzone/{id}',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Uuid
    |--------------------------------------------------------------------------
    |
    | Attachment model uses an UUID column. You can define your own UUID
    | generator here : a global function name or a static class method in the form :
    | App\Namespace\ClassName@method
    |
    */
    'uuid_provider' => 'uuid_v4_base36',

    /*
    |--------------------------------------------------------------------------
    | Behaviors
    |--------------------------------------------------------------------------
    |
    | Configurable behaviors :
    | - Concrete files can be delete when the database entry is deleted
    | - Dropzone delete can check for CSRF token match (set on upload)
    |
    */
    'behaviors' => [
        'cascade_delete' => env('ATTACHMENTS_CASCADE_DELETE', true),
        'dropzone_check_csrf' => env('ATTACHMENTS_DROPZONE_CHECK_CSRF', true),
    ]
];