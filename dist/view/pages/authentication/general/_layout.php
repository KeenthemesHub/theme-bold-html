<!--begin::Authentication - <?php echo @$params['comment']?> -->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
        <!--begin::Logo-->
        <a href="<?php echo Theme::getPageUrl('index')?>" class="pt-lg-20 mb-12">
            <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default-dark.svg')?>" class="theme-light-show h-40px h-lg-50px"/>
            <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="theme-dark-show h-40px h-lg-50px"/>     
        </a> 
        <!--end::Logo-->

        <?php Theme::getPageLayoutView()?>
    </div>
    <!--end::Content-->

    <!--begin::Illustration-->
    <div 
        class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-350px" 
        style="background-image: url(<?php echo Theme::getIllustrationUrl('7.png')?>)"> 
    </div>
    <!--end::Illustration-->
</div>
<!--end::Authentication - <?php echo @$params['comment']?>-->
                         