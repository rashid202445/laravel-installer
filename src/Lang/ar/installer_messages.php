<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'مثبّت لارافيل',
    'next' => 'الخطوة التالية',
    'back' => 'السابق',
    'finish' => 'تثبيت',
    'forms' => [
        'errorTitle' => 'حدثت الأخطاء التالية:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'مرحباً',
        'title'   => 'مثبّت لارافيل',
        'message' => 'معالج تثبيت وإعداد سهل.',
        'next'    => 'تحقق من المتطلبات',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'الخطوة 1 | متطلبات الخادم',
        'title' => 'متطلبات الخادم',
        'next'    => 'تحقق من الصلاحيات',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'الخطوة 2 | الصلاحيات',
        'title' => 'الصلاحيات',
        'next' => 'تهيئة البيئة',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة',
            'title' => 'إعدادات البيئة',
            'desc' => 'يرجى اختيار كيفية تهيئة ملف <code>.env</code> الخاص بالتطبيق.',
            'wizard-button' => 'إعداد باستخدام المعالج',
            'classic-button' => 'محرر النص التقليدي',
        ],
        'wizard' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة | المعالج الإرشادي',
            'title' => 'معالج <code>.env</code> الإرشادي',
            'tabs' => [
                'environment' => 'البيئة',
                'database' => 'قاعدة البيانات',
                'application' => 'التطبيق',
            ],
            'form' => [
                'name_required' => 'اسم البيئة مطلوب.',
                'app_name_label' => 'اسم التطبيق',
                'app_name_placeholder' => 'اسم التطبيق',
                'app_environment_label' => 'بيئة التطبيق',
                'app_environment_label_local' => 'محلي',
                'app_environment_label_developement' => 'تطوير',
                'app_environment_label_qa' => 'اختبار جودة',
                'app_environment_label_production' => 'إنتاج',
                'app_environment_label_other' => 'أخرى',
                'app_environment_placeholder_other' => 'أدخل اسم البيئة...',
                'app_debug_label' => 'تصحيح الأخطاء',
                'app_debug_label_true' => 'نعم',
                'app_debug_label_false' => 'لا',
                'app_log_level_label' => 'مستوى سجل التطبيق',
                'app_log_level_label_debug' => 'تصحيح',
                'app_log_level_label_info' => 'معلومات',
                'app_log_level_label_notice' => 'إشعار',
                'app_log_level_label_warning' => 'تحذير',
                'app_log_level_label_error' => 'خطأ',
                'app_log_level_label_critical' => 'حرج',
                'app_log_level_label_alert' => 'تنبيه',
                'app_log_level_label_emergency' => 'طارئ',
                'app_url_label' => 'رابط التطبيق',
                'app_url_placeholder' => 'رابط التطبيق',
                'db_connection_failed' => 'تعذر الاتصال بقاعدة البيانات.',
                'db_connection_label' => 'نوع الاتصال بقاعدة البيانات',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_connection_label_sqlsrv' => 'SQL Server',
                'db_host_label' => 'مضيف قاعدة البيانات',
                'db_host_placeholder' => 'مضيف قاعدة البيانات',
                'db_port_label' => 'منفذ قاعدة البيانات',
                'db_port_placeholder' => 'منفذ قاعدة البيانات',
                'db_name_label' => 'اسم قاعدة البيانات',
                'db_name_placeholder' => 'اسم قاعدة البيانات',
                'db_username_label' => 'اسم مستخدم قاعدة البيانات',
                'db_username_placeholder' => 'اسم مستخدم قاعدة البيانات',
                'db_password_label' => 'كلمة مرور قاعدة البيانات',
                'db_password_placeholder' => 'كلمة مرور قاعدة البيانات',

                'app_tabs' => [
                    'more_info' => 'مزيد من المعلومات',
                    'broadcasting_title' => 'البث والتخزين المؤقت والجلسات والطوابير',
                    'broadcasting_label' => 'مشغل البث',
                    'broadcasting_placeholder' => 'مشغل البث',
                    'cache_label' => 'مشغل الكاش',
                    'cache_placeholder' => 'مشغل الكاش',
                    'session_label' => 'مشغل الجلسات',
                    'session_placeholder' => 'مشغل الجلسات',
                    'queue_label' => 'مشغل الطوابير',
                    'queue_placeholder' => 'مشغل الطوابير',
                    'redis_label' => 'Redis',
                    'redis_host' => 'مضيف Redis',
                    'redis_password' => 'كلمة مرور Redis',
                    'redis_port' => 'منفذ Redis',

                    'mail_label' => 'البريد',
                    'mail_driver_label' => 'مشغل البريد',
                    'mail_driver_placeholder' => 'مشغل البريد',
                    'mail_host_label' => 'مضيف البريد',
                    'mail_host_placeholder' => 'مضيف البريد',
                    'mail_port_label' => 'منفذ البريد',
                    'mail_port_placeholder' => 'منفذ البريد',
                    'mail_username_label' => 'اسم المستخدم للبريد',
                    'mail_username_placeholder' => 'اسم المستخدم للبريد',
                    'mail_password_label' => 'كلمة مرور البريد',
                    'mail_password_placeholder' => 'كلمة مرور البريد',
                    'mail_encryption_label' => 'تشفير البريد',
                    'mail_encryption_placeholder' => 'تشفير البريد',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'معرف تطبيق Pusher',
                    'pusher_app_id_palceholder' => 'معرف تطبيق Pusher',
                    'pusher_app_key_label' => 'مفتاح تطبيق Pusher',
                    'pusher_app_key_palceholder' => 'مفتاح تطبيق Pusher',
                    'pusher_app_secret_label' => 'سر تطبيق Pusher',
                    'pusher_app_secret_palceholder' => 'سر تطبيق Pusher',
                ],
                'buttons' => [
                    'setup_database' => 'إعداد قاعدة البيانات',
                    'setup_application' => 'إعداد التطبيق',
                    'install' => 'تثبيت',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'الخطوة 3 | إعدادات البيئة | المحرر التقليدي',
            'title' => 'المحرر التقليدي للبيئة',
            'save' => 'حفظ .env',
            'back' => 'استخدم معالج النماذج',
            'install' => 'حفظ وتثبيت',
        ],
        'success' => 'تم حفظ إعدادات ملف .env بنجاح.',
        'errors' => 'تعذر حفظ ملف .env، يرجى إنشاؤه يدويًا.',
    ],

    'install' => 'تثبيت',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'تم تثبيت Laravel بنجاح في ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'اكتمل التثبيت',
        'templateTitle' => 'اكتمل التثبيت',
        'finished' => 'تم تثبيت التطبيق بنجاح.',
        'migration' => 'نتائج الهجرة وملء البيانات:',
        'console' => 'مخرجات طرفية التطبيق:',
        'log' => 'سجل التثبيت:',
        'env' => 'ملف .env النهائي:',
        'exit' => 'اضغط هنا للخروج',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        'title' => 'محدث Laravel',

        'welcome' => [
            'title'   => 'مرحباً بك في أداة التحديث',
            'message' => 'مرحباً بك في معالج التحديث.',
        ],

        'overview' => [
            'title'   => 'نظرة عامة',
            'message' => 'يوجد تحديث واحد.|يوجد :number تحديثات.',
            'install_updates' => 'تثبيت التحديثات',
        ],

        'final' => [
            'title' => 'اكتمل',
            'finished' => 'تم تحديث قاعدة بيانات التطبيق بنجاح.',
            'exit' => 'اضغط هنا للخروج',
        ],

        'log' => [
            'success_message' => 'تم تحديث Laravel بنجاح في ',
        ],
    ],
];
