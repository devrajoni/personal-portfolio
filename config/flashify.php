<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Session Key For The Flash Messages
    |--------------------------------------------------------------------------
    |
    */

    'key' => 'flashifies',

    /*
    |--------------------------------------------------------------------------
    | Plugin Configurations
    |--------------------------------------------------------------------------
    |
    | Sweetalert2 plugin is used by default.
    |
    | Supported Plugin: 'swal', 'izi-toast'
    |
    */

    'plugin' => 'swal',

    /*
    |--------------------------------------------------------------------------
    | Auto Translation For The Title and Text
    |--------------------------------------------------------------------------
    |
    | Auto Translation is enabled by default.
    |
    | If the trans value is true, it will be use laravel lang helper __()
    | for the title and text.
    |
    */

    'trans' => true,

    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define preset messages that will be reused.
    |   ---> plugin => 'plugin'
    |   ---> title => 'Message Title'
    |   ---> text => 'Message Text'
    |   ---> type => 'success|info|warning|error' (as per plugin)
    |   ---> options => {Plugin Options}
    |
    */

    'presets' => [
        'created' => [
            'plugin'  => 'swal',
            'title'   => 'Created',
            'text'    => 'Data has been created successfully.',
            'type'    => 'success',
            'options' => [],
        ],

        'updated' => [
            'plugin'  => 'swal',
            'title'   => 'Updated',
            'text'    => 'Data has been updated successfully.',
            'type'    => 'success',
            'options' => [],
        ],

        'deleted' => [
            'plugin'  => 'swal',
            'title'   => 'Deleted',
            'text'    => 'Data has been deleted successfully.',
            'type'    => 'success',
            'options' => [],
        ],

        'delete_confirm' => [
            'plugin'  => 'swal',
            'title'   => 'Are you sure?',
            'text'    => 'It will be delete permanently.',
            'type'    => 'warning',
            'options' => [
                'showCancelButton' => true,
                'cancelButtonColor' => '#dc3545',
                'confirmButtonColor' => '#7c69ef',
                'confirmButtonText' => 'Yes, delete it!',
                'cancelButtonText' => 'No',
            ],
        ],
    ],

];
