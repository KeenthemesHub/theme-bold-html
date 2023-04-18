<!--begin::Authentication - <?php echo @$params['comment']?> -->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
            <!--begin::Header-->
            <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">          
                <!--begin::Logo-->
                <a href="<?php echo Theme::getPageUrl('index')?>" class="py-2 py-lg-20">
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="theme-light-show h-40px h-lg-50px"/>
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default-dark.svg')?>" class="theme-dark-show h-40px h-lg-50px"/>
                </a>    
                <!--end::Logo-->

                <!--begin::Title-->
                <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">
                    Welcome to <?php echo Theme::getProductName()?>
                </h1>
                <!--end::Title-->

                <!--begin::Description-->
                <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                    Plan your blog post by choosing a topic creating <br/>
                    an outline and checking facts
                </p>
                <!--end::Description-->
            </div>
            <!--end::Header-->

            <!--begin::Illustration-->
            <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" 
                style="background-image: url(<?php echo Theme::getIllustrationUrl('17.png')?>)"> 
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Aside-->

    <!--begin::Body-->
    <div class="d-flex flex-column flex-lg-row-fluid py-10">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="<?php echo $params['wrapperClass']?> p-10 p-lg-15 mx-auto">
                <?php Theme::getPageLayoutView()?>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->       

        <!--begin::Footer-->
        <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
            <!--begin::Links-->
            <div class="d-flex flex-center fw-semibold fs-6">
                <a href="<?php echo Theme::getOption("general", "about")?>" class="text-muted text-hover-primary px-2" target="_blank">About</a>

                <a href="<?php echo Theme::getOption('general', 'support')?>" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                
                <a href="<?php echo Theme::getOption('product', 'purchase')?>" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - <?php echo @$params['comment']?>-->
                         