<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'لوحة التحكم الشامل',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin   ',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'حراج',
        ],
        [
            'title' => 'الإعلانات',
            'icon' => 'media/svg/icons/Communication/Share.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'page' => 'admin/hraj/ad/create',

                ],
                [
                    'title' => 'الكل',
                    'page' => 'admin/hraj/ad',

                ] ,
                [
                    'title' => 'حراج',
                    'page' => 'admin/hraj/hraj',

                ],
                [
                    'title' => 'مستفشيات',
                    'page' => 'admin/hraj/hospital',

                ] ,
                [
                    'title' => 'سياحة',
                    'page' => 'admin/hraj/travel',

                ]
            ],
        ],
        [
            'title' => 'التصنيفات',
            'icon' => 'media/svg/icons/Text/Bullet-list.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'page' => 'admin/hraj/hrjCategory/create',

                ],
                [
                    'title' => 'الكل',
                    'page' => 'admin/hraj/hrjCategory',

                ]
            ],
        ],
        [
            'title' => '  التصنيفات الفرعية ',
            'icon' => 'media/svg/icons/Text/Menu.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/hraj/subCategory/create'

                ],
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/hraj/subCategory/'

                ],
            ]
        ],
        [
            'title' => '   المدن ',
            'icon' => 'media/svg/icons/Map/Marker2.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/hraj/city/create'

                ],
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/hraj/city/'

                ],
            ]
        ],

        // Delivery

        [
            'section' => 'تطبيق التوصيل',
        ],
        [
            'title' => 'التصنيفات',
            'icon' => 'media/svg/icons/Text/Bullet-list.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'page' => 'admin/delivery/del_category/create',

                ],
                [
                    'title' => 'الكل',
                    'page' => 'admin/delivery/del_category',

                ]
            ],
        ],
        [
            'title' => '  الأماكن ',
            'icon' => 'media/svg/icons/Food/Pizza.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/delivery/places/create'

                ],
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/delivery/places/'

                ],
            ]
        ],
        [
            'title' => '   الطلبات ',
            'icon' => 'media/svg/icons/Shopping/Dollar.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'الطلبات المكتملة',
                    'bullet' => 'dot',
                    'page' => 'admin/delivery/orders/complete'

                ],
                [
                    'title' => 'الطلبات الجارية',
                    'bullet' => 'dot',
                    'page' => 'admin/delivery/orders/pending'

                ],
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/delivery/order'

                ],
            ]
        ],
// Custom
        [
            'section' => 'التدريس',
        ],
        [
            'title' => 'المواد',
            'icon' => 'media/svg/icons/Text/Bullet-list.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'page' => 'admin/edu/categoryEdu/create',

                ],
                [
                    'title' => 'الكل',
                    'page' => 'admin/edu/categoryEdu',

                ]
            ],
        ],
        [
            'title' => ' الباقات ',
            'icon' => 'media/svg/icons/Shopping/Box1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/edu/package/create'

                ],
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/edu/package/'

                ],
            ]
        ],
        [
            'title' => 'الدروس ',
            'icon' => 'media/svg/icons/Media/Airplay-video.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'الكل',
                    'bullet' => 'dot',
                    'page' => 'admin/edu/lessons/'

                ],
            ]
        ],

        [
            'section' => 'المستخدمين',
        ],
        [
            'title' => '   المدراء ',
            'icon' => 'media/svg/icons/Communication/Shield-user.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/user/admin/create'

                ],
                [
                    'title' => 'المدراء',
                    'bullet' => 'dot',
                    'page' => 'admin/user/admin/'

                ],

            ]
        ],
        [
            'title' => '   العملاء ',
            'icon' => 'media/svg/icons/General/User.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/user/user/create'

                ],
                [
                    'title' => 'العملاء',
                    'bullet' => 'dot',
                    'page' => 'admin/user/client/'

                ],

            ]
        ],
        [
            'title' => '   السائقين ',
            'icon' => 'media/svg/delivery-man (1).svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/user/driver/create'

                ],

                [
                    'title' => 'السائقين',
                    'bullet' => 'dot',
                    'page' => 'admin/user/drivers/'

                ],

            ]
        ],
        [
            'title' => '   المعلمين ',
            'icon' => 'media/svg/icons/General/User.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'إضافة',
                    'bullet' => 'dot',
                    'page' => 'admin/user/teacher/create'

                ],

                [
                    'title' => 'المدرسين',
                    'bullet' => 'dot',
                    'page' => 'admin/user/teachers/'

                ],
            ]
        ],


        [
            'section' => 'واجهة الموقع',
        ],

        [
            'title' => '   اللغة العربية ',
            'icon' => 'media/svg/icons/Design/Image.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'القسم الأول',
                    'bullet' => 'dot',
                    'page' => 'admin/front/ar/section1'

                ],
                [
                    'title' => 'القسم الثاني',
                    'bullet' => 'dot',
                    'page' => 'admin/front/ar/section3'

                ],
                [
                    'title' => 'الأسئلة الشائعة',
                    'bullet' => 'dot',
                    'page' => 'admin/front/ar/section4'

                ],[
                    'title' => 'القسم الثالث',
                    'bullet' => 'dot',
                    'page' => 'admin/front/ar/section5'

                ],


            ]
        ],
        [
            'title' => '   اللغة الانجليزية ',
            'icon' => 'media/svg/icons/Design/Image.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'القسم الأول',
                    'bullet' => 'dot',
                    'page' => 'admin/front/en/section1'

                ],
                [
                    'title' => 'القسم الثاني',
                    'bullet' => 'dot',
                    'page' => 'admin/front/en/section3'

                ],
                [
                    'title' => 'الأسئلة الشائعة',
                    'bullet' => 'dot',
                    'page' => 'admin/front/en/section4'

                ],[
                    'title' => 'القسم الثالث',
                    'bullet' => 'dot',
                    'page' => 'admin/front/en/section5'

                ],


            ]
        ],

    ]

];
