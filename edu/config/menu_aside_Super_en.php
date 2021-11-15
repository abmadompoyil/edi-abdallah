<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard  ',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/supervisor   ',
            'new-tab' => false,
        ],
        [
            'section' => 'Orders and InterView',
        ],
        [
            'title' => 'Recruitment',
            'icon' => 'media/svg/icons/Design/PenAndRuller.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'All',
                    'page' => 'supervisor/jobs',

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
                    'page' => 'supervisor/jobs/teacher/move'

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
                    'page' => 'supervisor/consults'

                ],
            ]
        ],
        // Custom
        [
            'section' => 'Basic function',
        ],

        [
            'title' => 'Library and files ',
            'icon' => 'media/svg/icons/General/Attachment1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Arabic',
                    'bullet' => 'dot',
                    'page' => 'supervisor/files/arabic'

                ],
                [
                    'title' => 'Islamic',
                    'bullet' => 'dot',
                    'page' => 'supervisor/files/islamic'

                ],
                [
                    'title' => 'Social Studies	',
                    'bullet' => 'dot',
                    'page' => 'supervisor/files/social'

                ],
                [
                    'title' => 'Other',
                    'bullet' => 'dot',
                    'page' => 'supervisor/files/other'
                ],
            ]
        ],

        // Delivery


// Custom
        [
            'section' => 'setting',
        ],
        [
            'title' => 'Meeting  Calender',
            'icon' => 'media/svg/icons/Code/Time-schedule.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Edit',
                    'page' => 'supervisor/meeting',

                ],

            ],
        ],
//        [
//            'title' => 'Reports',
//            'icon' => 'media/svg/icons/Shopping/Chart-bar2.svg',
//            'bullet' => 'dot',
//            'root' => true,
//            'submenu' => [
//                [
//                    'title' => 'Schools',
//                    'bullet' => 'dot',
//                    'page' => 'supervisor/report/schools/'
//
//                ],
//                [
//                    'title' => 'Subject',
//                    'bullet' => 'dot',
//                    'page' => 'supervisor/report/subject/'
//
//                ],
//                [
//                    'title' => 'Supervisor',
//                    'bullet' => 'dot',
//                    'page' => 'supervisor/report/supervisor/'
//
//                ],
//                [
//                    'title' => 'Teacher',
//                    'bullet' => 'dot',
//                    'page' => 'supervisor/report/teacher/'
//
//                ],
//            ]
//        ],


        [
            'title' => '   User ',
            'icon' => 'media/svg/icons/General/User.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'edit',
                    'bullet' => 'dot',
                    'page' => 'supervisor/user/edit/'

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


    ]

];
