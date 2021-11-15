<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard  ',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/school   ',
            'new-tab' => false,
        ],
        [
            'section' => 'Orders and InterView',
        ],
        [
            'title' => 'Recruitment ',
            'icon' => 'media/svg/icons/Design/PenAndRuller.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'New request',
                    'page' => 'school/job/create',

                ],
                [
                    'title' => 'All',
                    'page' => 'school/job',

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
                    'title' => 'Add',
                    'page' => 'school/job/move/create',

                ],
                [
                    'title' => 'All',
                    'bullet' => 'dot',
                    'page' => 'school/job/teacher/move'

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
                    'title' => 'Add',
                    'page' => 'school/consult/create',

                ],
                [
                    'title' => 'All',
                    'bullet' => 'dot',
                    'page' => 'school/consult'

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
                    'page' => 'school/files/arabic'

                ],
                [
                    'title' => 'Islamic',
                    'bullet' => 'dot',
                    'page' => 'school/files/islamic'

                ],
                [
                    'title' => 'Social Studies	',
                    'bullet' => 'dot',
                    'page' => 'school/files/social'

                ],

                [
                    'title' => 'Other',
                    'bullet' => 'dot',
                    'page' => 'school/files/other'
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
                    'page' => 'school/meeting',

                ],

            ],
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
                    'page' => 'school/report/schools/'

                ],
                [
                    'title' => 'Subject',
                    'bullet' => 'dot',
                    'page' => 'school/report/subject/'

                ],
                [
                    'title' => 'Supervisor',
                    'bullet' => 'dot',
                    'page' => 'school/report/supervisor/'

                ],
                [
                    'title' => 'Teacher',
                    'bullet' => 'dot',
                    'page' => 'school/report/teacher/'

                ],
            ]
        ],



        [
            'title' => '   User ',
            'icon' => 'media/svg/icons/General/User.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'edit',
                    'bullet' => 'dot',
                    'page' => 'school/user/edit/'

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
