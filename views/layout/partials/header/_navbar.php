<?php
    $itemClass = "ms-1 ms-md-3";
    $btnClass = "btn btn-icon btn-custom btn-color-gray-700 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px";
	$userAvatarClass = "symbol-30px symbol-md-35px";
	$btnIconClass = "fs-1";
?>

<!--begin::Navbar-->
<div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">  
    <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
        <?php Theme::getView('partials/search/_inline', array(
            'class' => 'w-lg-350px',
            'menu-placement' => 'bottom-start',
            "search-input-class" => "form-control rounded-1",
            'responsive' => 'true',
        ))?>
    </div>   

    <!--begin::My apps-->
    <div class="app-navbar-item <?php echo $itemClass?>">
        <!--begin::Menu- wrapper-->
        <div class="<?php echo $btnClass?>" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <?php echo Theme::getIcon("abstract-28", $btnIconClass)?>
        </div>
        <?php Theme::getView('partials/menus/_my-apps-menu')?>
        <!--end::Menu wrapper-->
    </div>
    <!--end::My apps--> 
    
    <!--begin::Notifications-->
    <div class="app-navbar-item <?php echo $itemClass?>">
        <!--begin::Menu- wrapper-->
        <div class="<?php echo $btnClass?>" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <?php echo Theme::getIcon('graph-3', $btnIconClass)?>   
        </div>
        <?php Theme::getView('partials/menus/_quick-links-menu')?>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Quick links-->

    <!--begin::Quick links-->
    <div class="app-navbar-item <?php echo $itemClass?>">
        <!--begin::Menu- wrapper-->
        <div class="<?php echo $btnClass?>" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <?php echo Theme::getIcon('notification-status', $btnIconClass)?>
        </div>
        <?php Theme::getView('partials/menus/_notifications-menu')?>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    
    <!--begin::User menu-->
    <div class="app-navbar-item ms-5" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol <?php echo $userAvatarClass ?? ''?>"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" 
            data-kt-menu-attach="parent" 
            data-kt-menu-placement="<?php echo (Theme::isRtl() ? "bottom-start" : "bottom-end")?>">
            <img class="symbol <?php echo $userAvatarClass?>" src="<?php echo Theme::getImageUrl("avatars", "300-3.jpg")?>" alt="user"/>             
        </div>
        <?php Theme::getView('partials/menus/_user-account-menu', array('theme-mode' => true, 'user-image' => 'avatars/300-3.jpg', 'signout-url' => 'authentication/sign-in/basic'))?>                  
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
    <?php if(Theme::getOption('layout', 'app/header/default/menu/display') === true):?>
        <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                <?php echo Theme::getIcon("text-align-left", "fs-1")?>
            </div>
        </div>
    <?php endif?>
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
