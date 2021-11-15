<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard  ',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin   ',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Basic function',
        ],
        [
            'title' => 'Date Meeting',
            'icon' => 'media/svg/icons/Code/Time-schedule.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Add',
                    'page' => 'admin/date/create',

                ],
                [
                    'title' => 'All',
                    'page' => 'admin/date',

                ] ,
                [
                    'title' => 'Calender',
                    'page' => 'admin/meetings',

                ] ,

            ],
        ],
        [
            'title' => 'Supervisor',
            'icon' => 'media/svg/icons/General/User.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Add',
                    'page' => 'admin/supervisors/create',

                ],
                [
                    'title' => 'All',
                    'page' => 'admin/supervisors',

                ] ,

            ],
        ],
        [
            'title' => 'Schools',
            'icon' => 'media/svg/icons/Home/Book-open.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Add',
                    'page' => 'admin/schools/create',

                ],
                [
                    'title' => 'All',
                    'page' => 'admin/schools',

                ]
            ],
        ],
        [
            'title' => 'Subjects',
            'icon' => 'media/svg/icons/Text/Menu.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Add',
                    'bullet' => 'dot',
                    'page' => 'admin/subjects/create'

                ],
                [
                    'title' => 'All',
                    'bullet' => 'dot',
                    'page' => 'admin/subjects'

                ],
            ]
        ],
        [
            'title' => 'Add cv and files ',
            'icon' => 'media/svg/icons/General/Attachment1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Arabic',
                    'bullet' => 'dot',
                    'page' => 'admin/files/arabic'

                ],
                [
                    'title' => 'Islamic',
                    'bullet' => 'dot',
                    'page' => 'admin/files/islamic'

                ]
                ,[
                    'title' => 'Social Studies	',
                    'bullet' => 'dot',
                    'page' => 'admin/files/social'

                ],
                [
                    'title' => 'Other',
                    'bullet' => 'dot',
                    'page' => 'admin/files/other'
                ],
            ]
        ],

        // Delivery

        [
            'section' => 'Orders and InterView',
        ],
        [
            'title' => 'Recruitment',
            'icon' => 'media/svg/icons/Design/PenAndRuller.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
//                [
//                    'title' => 'Add',
//                    'page' => 'admin/delivery/del_category/create',
//
//                ],
                [
                    'title' => 'All',
                    'page' => 'admin/jobss',

                ]
            ],
        ],
        [
            'title' => 'Move Teacher',
            'icon' => 'media/svg/icons/General/Thunder-move.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [

                [
                    'title' => 'All',
                    'bullet' => 'dot',
                    'page' => 'admin/jobss/teacher/move'

                ],
            ]
        ],
        [
            'title' => ' Consultation ',
            'icon' => 'media/svg/icons/Weather/Thunder.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'All',
                    'bullet' => 'dot',
                    'page' => 'admin/consultss'

                ],
            ]
        ],
// Custom
        [
            'section' => 'setting',
        ],

        [
            'title' => 'Reports',
            'icon' => 'media/svg/icons/Shopping/Chart-bar2.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Schools',
                    'bullet' => 'dot',
                    'page' => 'admin/report/schools/'

                ],
                [
                    'title' => 'Subject',
                    'bullet' => 'dot',
                    'page' => 'admin/report/subject/'

                ],
                [
                    'title' => 'Supervisor',
                    'bullet' => 'dot',
                    'page' => 'admin/report/supervisor/'

                ],
                [
                    'title' => 'Teacher',
                    'bullet' => 'dot',
                    'page' => 'admin/report/teacher/'

                ],
            ]
        ],
        [
            'title' => 'Sign out',
            'icon' => 'media/svg/icons/Navigation/Sign-out.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'logout',
                    'bullet' => 'dot',
                    'page' => 'logouts'

                ],

            ]
        ],



//
//        [
//            'section' => 'Website Front ',
//        ],
//
//        [
//            'title' => '  Arabic Lang  ',
//            'icon' => 'media/svg/icons/Design/Image.svg',
//            'bullet' => 'dot',
//            'root' => true,
//            'submenu' => [
//                [
//                    'title' => 'First section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/ar/section1'
//
//                ],
//                [
//                    'title' => 'Second  section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/ar/section3'
//
//                ],
//                [
//                    'title' => 'FAQ',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/ar/section4'
//
//                ],[
//                    'title' => 'Third Section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/ar/section5'
//
//                ],
//
//
//            ]
//        ],
//        [
//            'title' => '   English Lang  ',
//            'icon' => 'media/svg/icons/Design/Image.svg',
//            'bullet' => 'dot',
//            'root' => true,
//            'submenu' => [
//                [
//                    'title' => 'First section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/en/section1'
//
//                ],
//                [
//                    'title' => 'Second  section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/en/section3'
//
//                ],
//                [
//                    'title' => 'FAQ',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/en/section4'
//
//                ],[
//                    'title' => 'Third Section',
//                    'bullet' => 'dot',
//                    'page' => 'admin/front/en/section5'
//
//                ],
//
//
//            ]
//        ],

    ]

];
