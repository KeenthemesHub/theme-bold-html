<?php
    $toggleButtonClass = Theme::getOption('layout', 'app/sidebar/default/minimize/desktop/default') === true ? 'active' : '';
    $toggleEnabled = Theme::getOption('layout', 'app/sidebar/default/minimize/desktop/enabled');
    
    $toggleType = '';
    $toggleState = '';
    if ( Theme::getOption('layout', 'app/sidebar/default/minimize/desktop/enabled') === true ) {
        $toggleType = 'minimize';
        $toggleState = 'active';
    }
?>

<div class="app-sidebar-header d-flex flex-stack d-none d-lg-flex pt-8 pb-2" id="kt_app_sidebar_header">  
    <!--begin::Logo-->
    <a href="<?php echo Theme::getPageUrl('index')?>" class="app-sidebar-logo">
        <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="h-20px d-none d-sm-inline app-sidebar-logo-default theme-light-show"/>
        <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default-dark.svg')?>" class="h-20px theme-dark-show"/>
    </a>
    <!--end::Logo-->

    <?php if ( $toggleEnabled === true ):?>
        <!--begin::Sidebar toggle-->
        <div 
            id="kt_app_sidebar_toggle" 
            class="app-sidebar-toggle btn btn-sm btn-icon btn-color-gray-600 btn-active-color-primary d-none d-lg-flex rotate <?php echo $toggleButtonClass?>" 
            data-kt-toggle="true" 
            data-kt-toggle-state="<?php echo $toggleState?>" 
            data-kt-toggle-target="body" 
            data-kt-toggle-name="app-sidebar-<?php echo $toggleType?>"
            >
            
            <?php echo Theme::getIcon("exit-left rotate-180", "fs-1 me-n4")?> 
        </div>
        <!--end::Sidebar toggle-->
    <?php endif?>
</div>
