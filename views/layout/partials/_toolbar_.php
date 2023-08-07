<!--begin::Toolbar container-->
<div class="d-flex flex-stack flex-row-fluid">     
   <!--begin::Toolbar container-->
    <div class="d-flex flex-column flex-row-fluid">     
    <!--begin::Toolbar wrapper--> 
        <?php Theme::getView('layout/partials/_page-title')?>  
    </div>
    <!--end::Toolbar container-->

    <!--begin::Actions-->
    <div class="d-flex align-self-center flex-center flex-shrink-0">
        <a href="#" class="btn btn-sm btn-secondary d-flex flex-center ms-3 px-4 py-3" <?php Theme::linkModal('invite-friends')?>>
            <?php echo Theme::getIcon("plus-square", "fs-2 text-gray-400")?> 
            <span>Invite</span>
        </a>    

        <a href="#" class="btn btn-sm btn-primary ms-3 px-4 py-3" <?php Theme::linkModal('new-target')?>>
            Create <span class="d-none d-sm-inline">App</span> 
        </a> 
    </div>
    <!--end::Actions--> 
</div>
<!--end::Toolbar container-->