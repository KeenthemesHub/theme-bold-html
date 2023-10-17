<!--begin::Authentication - Signup Free Trial-->
<div class="d-flex flex-column flex-xl-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-fluid">
        <!--begin::Wrapper-->
        <div class="d-flex flex-row-fluid flex-center p-10"> 
            <!--begin::Content-->
            <div class="d-flex flex-column">
                <!--begin::Logo-->
                <a href="<?php echo Theme::getPageUrl('index')?>" class="mb-15">
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="theme-light-show h-40px h-lg-50px"/>
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default-dark.svg')?>" class="theme-dark-show h-40px h-lg-50px"/>
                </a>
                <!--end::Logo-->

                <!--begin::Title-->
                <h1 class="text-gray-900 fs-3x mb-5">Welcome, Guest!</h1>          
                <!--end::Title-->

                <!--begin::Description-->
                <div class="fw-semibold fs-3 text-gray-500 mb-10">
                    Plan your blog post by choosing a topic creating <br/>
                    an outline and checking facts
                </div>
                <!--begin::Description-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Illustration-->
        <div 
            class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-200px min-h-xl-450px" 
            style="background-image: url(<?php echo Theme::getIllustrationUrl('5.png')?>)"> 
        </div>
        <!--end::Illustration-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
    <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
        <!--begin::Wrapper-->
        <div class="d-flex flex-center p-15 bg-body shadow-sm rounded w-100 w-md-550px mx-auto ms-xl-20">
            <?php Theme::getView("pages/authentication/_forms/_free-trial")?>            
        </div>
        <!--end::Wrapper-->        
    </div>
    <!--end::Right Content-->
</div>
<!--end::Authentication - Signup Free Trial-->