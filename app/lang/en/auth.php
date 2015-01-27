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
        'desc'            => 'أدخل بياناتك',
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
        'account_created'              => 'تم تسجيل حسابك بنجاح. الرجاء التحقق من إيميلك لوجود توجيهات لكيفية تأكيد حسابك',
        'too_many_attempts'            => 'محاولات خاطئة كثيرة، الرجاء المحاولة بعد عدة دقائق',
        'wrong_credentials'            => 'Wrong username or Password',
        'not_confirmed'                => 'يبدو ان حسابك غير منشط، راجع ايميلك لوجود رسالة تأكيد.',
        'confirmation'                 => 'تم تنشيط حسابك الان! يمكنك الان تسجيل الدخول بنجاح',
        'wrong_confirmation'           => 'كود تنشيط خاطئ',
        'password_forgot'              => 'بيانات استعادة كلمة مرورك تم ارسالها إلى ايميلك',
        'invalid_user'                 => 'لم يتم العثور على المستخدم',
        'password_resetted'            => 'تم تغيير كلمة مرورك بنجاح',
        'wrong_password_reset'         => 'كلمة مرور خاطئة، الرجاء معاودة المحاولة',
        'wrong_token'                  => 'تعرفة استعادة كلمة المرور غير صحيحة ، الرجاء المحاولة مره أخرى.',
        'duplicated_credentials'       => 'البيانات المستخدمة موجودة مسبقاً ، الرجاء استخدام بيانات أخرى',
        'must_login'                   => 'عليك أن تكون مسجلا قبل دخول لهذه الصفحة',
        'account_activated'            => 'حسابك قد تم تفعيله ، الرجاء تسجيل الدخول',
        'reminders_sent'               => 'لتفعيل حسابك ، يرجى اتباع الخطوات التي قمنا أرسلت في البريد الإلكتروني الخاص ,بك',
        'account_activation_link_sent' => 'الرجاء التحقق من إيميلك لوجود توجيهات لكيفية تأكيد حسابك',
        'resent_activation_link'       => 'اضغظ هنا لإعادة إرسال رابط التفعيل',
        'account_already_active'       => 'Your account is already active',
        'token_link_expired'           => 'Token Link Expired',
        'user_registration_failed'     => 'User Registration Failed'


    ],

    'account_confirmation' => [
        'subject'   => 'لتفعيل حسابك في كايزن',
        'greetings' => 'مرحبا :name',
        'body'      => 'الرجاء الدخول على الرابط التالي  لتأكيد حسابك ',
        'farewell'  => 'نشكرك لتسجيلك معنا',

    ],

    'account_activated'    =>
        [
            'body'                => 'لقد تم إنشاء حسابك في موقع كايزن مع البريد الإلكتروني',
            'click_here_to_login' => 'يمكنك تسجيل الدخول الآن مع هذا الرابط'
        ],

    'reset'                => [
        'title'     => 'إستعادة كلمة المرور',
        'heading'   => 'إستعادة كلمة المرور',
        'greetings' => 'مرحباً :name',
        'body'      => 'الرجاء اتباع الرابط التالي لكي تستعيد كلمة مرورك.',
        'farewell'  => 'شكراً لتواصلك معنا',
    ],

];