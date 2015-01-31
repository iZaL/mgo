<?php
return [
    'signup'               => [
        'title'                        => 'Title',
        'desc'                         => 'Description',
        'confirmation_required'        => 'Confirmation Required',
        'submit'                       => 'Submit',
        'valid_information'            => 'Valid Information',
        'name_ar'                      => 'Name in Arabic',
        'name_en'                      => 'Name in English',
        'previous_event_participation' => '',
    ],

    'login'                => [
        'title'           => 'Login',
        'desc'            => 'Fill up your information',
        'forgot_password' => 'Forgot Password',
        'remember'        => 'remember؟',
        'submit'          => 'Login',
        'heading'         => 'Login to your account',
    ],

    'forgot'               => [
        'title'  => 'Forgot Password',
        'submit' => 'Continue',
    ],

    'alerts'               => [
        'account_created'              => 'Your account has been created. check your email for confirmation',
        'too_many_attempts'            => 'محاولات خاطئة كثيرة، الرجاء المحاولة بعد عدة دقائق',
        'wrong_credentials'            => 'Wrong username or Password',
        'not_confirmed'                => 'Your account has not been confirmed. check your email for confirmation mail',
        'confirmation'                 => 'Your Account has been confirmed. You can login now',
        'wrong_confirmation'           => 'Confirmation code is invalid',
        'password_forgot'              => 'Password reset information has been emailed to you',
        'invalid_user'                 => 'Invalid User',
        'password_resetted'            => 'Your Password has been resetted',
        'wrong_password_reset'         => 'Wrong password, please try again',
        'wrong_token'                  => 'Invalid Token.',
        'duplicated_credentials'       => 'البيانات المستخدمة موجودة مسبقاً ، الرجاء استخدام بيانات أخرى',
        'must_login'                   => 'You must login before this action',
        'account_activated'            => 'Your account has been activated. please try to login now',
        'reminders_sent'               => 'To activate your account, please follow the steps we have sent in your email',
        'account_activation_link_sent' => 'Check your email for process to activate your account',
        'resent_activation_link'       => 'Click here to resend activation link',
        'account_already_active'       => 'Your account is already active',
        'token_link_expired'           => 'Token Link Expired',
        'user_registration_failed'     => 'User Registration Failed'


    ],

    'account_confirmation' => [
        'subject'   => 'TO activate your account',
        'greetings' => 'Welcome :name',
        'body'      => 'Click this link to activate your account',
        'farewell'  => 'Thanks For Registering with us',

    ],

    'account_activated'    =>
        [
            'body'                => 'Your account has been activated ',
            'click_here_to_login' => 'Click here to login'
        ],

    'reset'                => [
        'title'     => 'Retrieve your password',
        'heading'   => 'Retrieve your password',
        'greetings' => 'Welcome :name',
        'body'      => 'Follow these steps to reset your password',
        'farewell'  => 'Thanks for Registering with us',
    ],

];