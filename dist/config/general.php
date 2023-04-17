<?php
return array(  
       // Product
       'product' => array(
        'version' => '1.0.0',
        'name' => 'Bold',
        'name-free' => 'Bold HTML Free',
        'name-pro' => 'Bold HTML Pro',
        'description' => 'Bold HTML ' . (Theme::isFreeVersion() ? 'Free ' : 'Pro') .  ' - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme',       
        'preview' => 'https://preview.keenthemes.com/bold-html' . (Theme::isFreeVersion() ? '-free' : '-pro'),
        'purchase' => 'https://keenthemes.com/products/bold-html-pro',   
        'free-download' => 'https://keenthemes.com/products/bold-html-free',
        "docs" => 'https://preview.keenthemes.com/html/bold-html-pro/docs',
        "login-path" => "authentication/sign-in/basic",
        'comparision' => array(
            array(
                'label' => 'UI Elements',
                'pro' => '100',
                'free' => '20',
                'thumbnail' => 'demos/demo1.png'             
            ),            
            array(
                'label' => 'In-house Components',
                'pro' => '40',
                'free' => '20'                
            ),    
            array(
                'label' => 'Crafted Pages',
                'pro' => '20',
                'free' => '5'                
            ),     
            array(
                'label' => 'Complete Documentation',
                'pro' => true,
                'free' => true
            ),           
            array(
                'label' => 'Product Support',
                'url' => 'https://keenthemes.com/support',
                'pro' => true,
                'free' => false
            ),
            array(
                'label' => 'Layout Builder',
                'pro' => true,
                'free' => false  
            ),
            array(
                'label' => 'Source Vectors',
                'pro' => true,
                'free' => false             
            ),
            array(
                'label' => 'Email Templates',
                'pro' => true,
                'free' => false             
            ),
            array(
                'label' => 'User Management App',
                'pro' => true,
                'free' => false             
            ),
            array(
                'label' => 'Calendar App',
                'pro' => true,
                'free' => false             
            ),
            array(
                'label' => 'Chat App',
                'pro' => true,
                'free' => false             
            ), 
            array(
                'label' => 'Customers App',
                'pro' => true,
                'free' => false             
            )     
        )
    ),

    // Meta
    'meta' => array(
        'title' =>  'Bold HTML ' . (Theme::isFreeVersion() ? 'Free ' : 'Pro') .  '- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme',       
        'description' => 'Bold admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.',
        'keywords' => 'Bold theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard',
        'canonical' => 'https://preview.keenthemes.com/bold-html' . (Theme::isFreeVersion() ? '-free' : '-pro')
    ),
     
    // Layout
    "layout" => array(
        // App(new layout core)
        "app" => array(
            "general" => array(
                "evolution" => true,    
                "layout-type" => "default", // options: default|blank
                'page-bg-white' => false, // Set true if page background color is white
                "page-width" => "default",  // default/fluid|fixed  
                "icons" => "solid", // solid|outline|duotone                  
            ),

            "header" => array(
                "display" => true, 
                "default" => array(
                    "view" => "layout/partials/_header_", 
                    "class" => "",
                    "container" => "fluid", 
                    "container-class" => "d-flex align-items-stretch flex-stack", 
                    "fixed" => array(
                        "desktop" => true, 
                        "mobile" => true 
                    ),
                    "sticky" => array(
                        "enabled" => true,
                        "attributes" => array(
                            "data-kt-sticky" => "true",
                            "data-kt-sticky-activate" => "{default: true, lg: true}",
                            "data-kt-sticky-name" => "app-header-minimize",
                            "data-kt-sticky-offset" => "{default: '200px', lg: '300px'}",
                            "data-kt-sticky-animation" => "false",
                        )
                    ),
                )
            ),

            "sidebar" => array(
                "display" => true, 
                "default" => array(
                    "view" => "layout/partials/_sidebar_", 
                    "class" => "flex-column",
                    "push" => array(
                        "header" => true, 
                        "toolbar" => true, 
                        "footer" => true 
                    ),
                    "drawer" => array(
                        "enabled" => true, 
                        "attributes" => array(
                            "data-kt-drawer" => "true",
                            "data-kt-drawer-name" => "app-sidebar",
                            "data-kt-drawer-activate" => "{default: true, lg: false}",
                            "data-kt-drawer-overlay" => "true",
                            "data-kt-drawer-width" => "250px",
                            "data-kt-drawer-direction" => "start",
                            "data-kt-drawer-toggle" => "#kt_app_sidebar_mobile_toggle" 
                        ) 
                    ),
                    "fixed" => array(
                        "desktop" => true, 
                    ),
                    "minimize" => array(
                        "desktop" => array(
                            "enabled" => true,  
                            "default" => false,
                            "hoverable" => true
                        )
                    ),
                )
            ),   

            "page-title" => array(            
                "display" => true,
                "breadcrumb" => true,
                "description" => false
            ), 

            "breadcrumb" => array(            
                "display" => true,                 
                "direction" => "row"
            ),

            "toolbar" => array(
                "display" => true, 
                "view" => "layout/partials/_toolbar_", 
                "class" => "pt-7 pt-lg-10",
                "container" => "fluid", 
                "container-class" => "d-flex align-items-stretch"
            ),

            "content" => array(
                "container" => "fluid"
            ), 

            "footer" => array(
                "display" => true, 
                "view" => "layout/partials/_footer_", 
                "container" => "fluid", 
                "container-class" => "d-flex flex-column flex-md-row flex-center flex-md-stack py-3", 
                "fixed" => array(
                    "desktop" => false, 
                    "mobile" => false 
                )
            ),

            'page-loader' => array(
                'type' => 'none', // Set none|default|spinner-message|spinner-logo to hide or show page loader
                'logo-image' => 'default.svg',
                'logo-class' => 'mh-75px'
            ),
        ),

        // Scrolltop
        'scrolltop' => array(
            'display' => true // Display scrolltop
        ),

        // Illustration
        "illustrations" => array(
            "set" => "sketchy-1"
        ),

        "layout-builder" => array(
            'customizer' => array(
                "display" => true,
                "options" => array(
                    5 => "header",
                    6 => "toolbar",
                ),                
            ),
            "builder" => array(                   
                2 => "toolbar",
                3 => "header"                   
            )  
        )                  
    )
);
