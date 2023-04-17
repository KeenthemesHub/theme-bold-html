<?php
return array(
    'sidebar' => array(
        // Dashboards
        array(
            'title' => 'Dashboards',
            'icon' => Theme::getIcon("element-11", "fs-2"),
            'classes' => array('item' => 'menu-accordion ms-n5'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub' => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title' => 'Default',
                        'path' => 'index',
                        'bullet' => '<span class="bullet bullet-dot"></span>'
                    ),

                    array(
                        'title' => 'Store Analytics',
                        'path' => 'dashboards/store-analytics',
                        'bullet' => '<span class="bullet bullet-dot"></span>'
                    ),

                    array(
                        'title' => 'Logistics',
                        'path' => 'dashboards/logistics',
                        'bullet' => '<span class="bullet bullet-dot"></span>'
                    ),

                    array(
                        'title' => 'Projects',
                        'path' => 'dashboards/projects',
                        'bullet' => '<span class="bullet bullet-dot"></span>'
                    )
                )
            )
        ),

        // Pages
        array(
            'title' => 'Pages',
            'icon' => Theme::getIcon("some-files", "fs-2"),
            'classes' => array('item' => 'menu-accordion ms-n5'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub' => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        "title" => "About Us",
                        "bullet" => '<span class="bullet bullet-dot"></span>',
                        "path" => "pages/general/about"
                    ),

                    array(
                        "title" => "Invoice",
                        "bullet" => '<span class="bullet bullet-dot"></span>',
                        "path" => "pages/general/invoice"
                    ),

                    array(
                        "title" => "FAQ",
                        "bullet" => '<span class="bullet bullet-dot"></span>',
                        "path" => "pages/general/faq"
                    ),

                    array(
                        "title" => "Wizard",
                        "bullet" => '<span class="bullet bullet-dot"></span>',
                        "path" => "pages/general/wizard"
                    ),

                    array(
                        "title" => "Pricing",
                        "bullet" => '<span class="bullet bullet-dot"></span>',
                        "path" => "pages/general/pricing"
                    )
                )
            )
        ), 

        // Account
        array(
            "title" => "Account",
            'icon' => Theme::getIcon("chart-pie-4", "fs-1"),
            'classes' => array('item' => 'menu-accordion ms-n5'),
            "attributes" => array(
                "item" => array(
                    "data-kt-menu-trigger" => "click"
                )
            ),
            "sub" => array(
                'class' => 'menu-sub-accordion',
                "items" => Theme::getOption("menu", "global/account")
            )
        ),

        // Authentication
        array(            
            "pro" => true,
            "title" => "Authentication",
            'icon' => Theme::getIcon("user", "fs-1"),
            'classes' => array('item' => 'menu-accordion ms-n5'),
            "attributes" => array(
                "item" => array(
                    "data-kt-menu-trigger" => "click"
                )
            ),
            "sub" => array(
                'class' => 'menu-sub-accordion',
                "items" => Theme::getOption("menu", "global/authentication/sidebar")
            )
        ),  

        // APPS
        array(
        'title' => 'APPS',
        'icon' => Theme::getIcon("chart-line-star", "fs-2"),
        'classes' => array('item' => 'menu-accordion ms-n5'),
        'attributes' => array("data-kt-menu-trigger" => "click"),
        'sub' => array(
            'class' => 'menu-sub-accordion',
            'items' => array(
                    // Projects
                    array(
                        'title' => 'Projects',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'classes' => array('item' => 'menu-accordion'),
                        "attributes" => array(
                            "item" => array(
                                "data-kt-menu-trigger" => "click"
                            )
                        ),
                        'sub' => array( 
                            'class' => 'menu-sub-accordion',
                            'items' =>  Theme::getOption("menu", "global/apps/sidebar/projects")
                        )
                    ),

                    // eCommerce
                    array(
                        'title' => 'eCommerce',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'classes' => array('item' => 'menu-accordion'),
                        "attributes" => array(
                            "item" => array(
                                "data-kt-menu-trigger" => "click"
                            )
                        ),
                        'sub' => array( 
                            'class' => 'menu-sub-accordion',
                            'items' =>  Theme::getOption("menu", "global/apps/sidebar/ecommerce")
                        )
                    ),

                    // User Management
                    array(
                        'title' => 'User Management',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'classes' => array('item' => 'menu-accordion'),
                        "attributes" => array(
                            "item" => array(
                                "data-kt-menu-trigger" => "click"
                            )
                        ),
                        'sub' => array( 
                            'class' => 'menu-sub-accordion',
                            'items' =>  Theme::getOption("menu", "global/apps/sidebar/user-management")
                        )
                    ),

                    // Subscription
                    array(
                        'title' => 'Subscription',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                        'classes' => array('item' => 'menu-accordion'),
                        "attributes" => array(
                            "item" => array(
                                "data-kt-menu-trigger" => "click"
                            )
                        ),
                        'sub' => array( 
                            'class' => 'menu-sub-accordion',
                            'items' =>  Theme::getOption("menu", "global/apps/sidebar/subscriptions")
                        )
                    ),
                )
            )
        ),

        // HELP
        array(
        'title' => 'Help',
        'icon' => Theme::getIcon("rescue", "fs-2"),
        'classes' => array('item' => 'menu-accordion ms-n5'),
        'attributes' => array("data-kt-menu-trigger" => "click"),
        'sub' => array(
            'class' => 'menu-sub-accordion',
            'items' => array(
                    // Components
                    array(
                        'title' => 'Components',
                        'new-tab' => true,
                        "attributes" => array(
                            'link' => array(
                                "title" => 'Check out over 200 in-house components, plugins and ready for use solutions',
                                "data-bs-toggle" => "tooltip",
                                "data-bs-trigger" => "hover",
                                "data-bs-dismiss" => "click",
                                "data-bs-placement" => "right",
                            ),
                        ),
                        'bullet' => '<span class="bullet bullet-dot"></span>',           
                        'path' => Theme::getDocsUrl('base/utilities')
                    ),

                    // Documentation
                    array(
                        'title' => 'Documentation',
                        'new-tab' => true,
                        "attributes" => array(
                            'link' => array(
                                "title" => 'Check out the complete documentation',
                                "data-bs-toggle" => "tooltip",
                                "data-bs-trigger" => "hover",
                                "data-bs-dismiss" => "click",
                                "data-bs-placement" => "right",
                            )           
                        ),
                        'bullet' => '<span class="bullet bullet-dot"></span>',          
                        'path' => Theme::getDocsUrl()
                    ),

                    // Layout Builder
                    array(
                        'title' => 'Layout Builder',
                        "attributes" => array(
                            'link' => array(
                                "title" => 'Build your layout, preview and export HTML for server side integration',
                                "data-bs-toggle" => "tooltip",
                                "data-bs-trigger" => "hover",
                                "data-bs-dismiss" => "click",
                                "data-bs-placement" => "right",
                            )           
                        ),
                        'bullet' => '<span class="bullet bullet-dot"></span>',          
                        'path' => 'layout-builder'
                    ),

                    // Changelog
                    array(
                        'title' => function ($item) {
                            return 'Changelog v' . Theme::getVersion();
                        },
                        'new-tab' => true,
                        'bullet' => '<span class="bullet bullet-dot"></span>',         
                        'path' => Theme::getDocsUrl('getting-started/changelog')
                    )
                )
            )
        )
    )
);