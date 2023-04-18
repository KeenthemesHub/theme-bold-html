<?php
    // Item items
    $items = array(
        array(
            'title' => 'AudioEngine',
            'state' => 'success',
            "view"  => "apps/projects/project",
            "bullet" => 'true'
        ),
        array(
            'title' => 'Schipol Extranet',
            'state' => 'danger',
            "view"  => "apps/projects/activity",
            "bullet" => 'true'
        ),        
        array(
            'title' => 'ABN AMBRO',
            'state' => 'warning',
            "view"  => "apps/projects/files",
            "bullet" => 'false'
        ),
        array(
            'title' => 'NS Mobile App',
            'state' => 'danger',
            "view"  => "apps/projects/settings",
            "bullet" => 'false'
        )
    );

    $activePage = "apps/projects/project";

    foreach($items as $each) {
        if (Theme::getPagePath() === $each['view']) {
            $activePage = $each['view'];
        }
    }
?>

<!--begin::Teams-->
<div class="app-sidebar-menu-secondary menu menu-rounded menu-column mb-6">
    <!--begin::Heading-->
    <div class="menu-item mb-2">
        <div class="menu-heading text-uppercase fs-7 fw-bolder">
            Teams
        </div>
    </div>
    <!--end::Heading-->
    <?php foreach($items as $each):?>
        <!--begin::Menu Item-->
        <div class="menu-item">
            <!--begin::Menu link-->
            <a class="menu-link <?php echo Util::putIf($activePage === $each['view'], "active")?>" href="<?php echo Theme::getPageUrl($each["view"])?>">
                <?php if ($each['bullet'] === 'true'):?>
                    <!--begin::Bullet--> 
                    <span class="menu-icon">
                        <span class="bullet bullet-dot bg-<?php echo $each['state']?>">
                        </span>
                    </span>                      
                    <!--end::Bullet--> 

                    <?php else:?>
                    <!--begin::Icon--> 
                    <span class="menu-icon">
                        <?php echo Theme::getIcon("lock-2", "fs-2")?>
                    </span>
                    <!--end::Icon-->
                <?php endif?>      

                <!--begin::Title-->
                <span class="menu-title">
                    <?php echo $each['title']?>
                </span>
                <!--end::Title-->                                     
            </a>
            <!--end::Menu link-->                
        </div>
        <!--end::Menu Item-->
    <?php endforeach?> 
</div>    
<!--end::Teams-->
