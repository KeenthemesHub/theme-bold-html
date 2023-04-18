<?php
    $nav = array(
        array("title" => "Overview", "view" => "index"),
        array("title" => "Settings", "view" => "account/settings"),              
        array("title" => "Security", "view" => "account/security"),          
        array("title" => "Billing", "view" => "account/billing"),        
        array("title" => "Statements", "view" => "account/statements"),
        array("title" => "Referrals", "view" => "account/referrals"),  
        array("title" => "API Keys", "view" => "account/api-keys"),             
        array("title" => "Logs", "view" => "account/logs"),        
    );
?>

<!--begin::Toolbar wrapper-->
<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
    <?php if ( Theme::getOption('layout', 'app/page-title/display') === true && Theme::getOption('layout', 'app/header/default/page-title') !== true ):?>
        <?php Theme::getView('layout/partials/_page-title')?>
    <?php endif?>

    <!--begin::Actions-->
    <div class="d-flex align-self-center flex-center flex-shrink-0">
        <a href="#" class="btn btn-sm btn-secondary d-flex flex-center ms-3 px-4 py-3" <?php Theme::linkModal('invite-friends')?>>
            <?php echo Theme::getIcon("plus-square", "fs-2 text-gray-400")?> 
            <span>Invite</span>
        </a>   

        <a href="#" class="btn btn-sm btn-primary ms-3 px-4 py-3" <?php Theme::linkModal('create-app')?>>Create App</a> 
    </div>
    <!--end::Actions-->
</div>
<!--end::Toolbar wrapper-->