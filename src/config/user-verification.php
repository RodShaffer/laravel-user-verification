<?php

return [

    /*
    |---------------------------------------------------------------------------
    | E-mail options
    |---------------------------------------------------------------------------
    |
    */
    'email' => [
        /*
        |-----------------------------------------------------------------------
        | Email View Type
        |-----------------------------------------------------------------------
        |
        | This option defines the email view type.
        |
        | Supported: "default", "markdown"
        |
        */
        'type' => 'default',

        /*
        |-----------------------------------------------------------------------
        | Custom view name
        |-----------------------------------------------------------------------
        |
        | This option defines a custom view name.
        |
        */
        'view' => null,
    ],

    /*
    |---------------------------------------------------------------------------
    | Log the user in after verification
    |---------------------------------------------------------------------------
    |
    | This option defines if the user should be logged in after verification.
    | USE WITH CAUTION as it may introduce security issues in your app.
    | By default Laravel log in a new registered user.
    |
    | Supported: (bool) "true", "false"
    |
    */
    'auto-login' => false,

    /*
    |---------------------------------------------------------------------------
    | Use gravatar for the user avatars
    |---------------------------------------------------------------------------
    |
    | This option defines if Gravatar should be used for user avatars.
    | user table must have a gravatar field if set to true.
    | ie. $table->string('gravatar')->nullable()->default(null);
    |
    | Supported: (bool) "true", "false"
    |
    */
    'gravatar' => false,

];
