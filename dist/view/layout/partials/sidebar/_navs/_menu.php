<!--begin::Sidebar menu-->
<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" 
    class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary ps-6 pe-0">
    <!--begin::Heading-->
    <div class="menu-item mb-2">
        <div class="menu-heading text-uppercase fs-7 fw-bolder">
           Menu
        </div>
    </div>
    <!--end::Heading-->
    <?php 
        Bootstrap::getSidebarMenu()->build();
    ?>
</div>
<!--end::Sidebar menu-->
