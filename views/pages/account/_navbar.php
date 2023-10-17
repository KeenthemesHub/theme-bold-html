<?php
    $nav = array(
        array("title" => "Overview", "view" => "account/overview"),
        array("title" => "Settings", "view" => "account/settings"),              
        array("title" => "Security", "view" => "account/security"),  
        array("title" => "Activity", "view" => "account/activity"),         
        array("title" => "Billing", "view" => "account/billing"),        
        array("title" => "Statements", "view" => "account/statements"),
        array("title" => "Referrals", "view" => "account/referrals"),  
        array("title" => "API Keys", "view" => "account/api-keys"),             
        array("title" => "Logs", "view" => "account/logs"),        
    );
?>

<!--begin::Navbar-->
<div class="card <?php echo @$params['class']?>">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                    <img src="<?php echo Theme::getImageUrl("avatars/300-3.jpg")?>" alt="image" />
                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                </div>
            </div>
            <!--end::Pic-->

            <!--begin::Info-->
            <div class="flex-grow-1">
                <!--begin::Title-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::User-->
                    <div class="d-flex flex-column">
                        <!--begin::Name-->
                        <div class="d-flex align-items-center mb-2">
                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Johnson</a>
                            <a href="#"><?php echo Theme::getIcon("verify", "fs-1 text-primary")?></a>

                            <a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3" <?php Theme::linkModal('upgrade-plan')?> <?php Theme::linkModal('upgrade-plan')?> >Upgrade to Pro</a>
                        </div>
                        <!--end::Name-->

                        <!--begin::Info-->                        
                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                <?php echo Theme::getIcon("profile-circle", "fs-4 me-1")?>
                                React Developer
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                <?php echo Theme::getIcon("geolocation", "fs-4 me-1")?>
                                SF, Bay Area
                            </a>
                            <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                <?php echo Theme::getIcon("sms", "fs-4 me-1")?>
                                johnson@kt.com
                            </a>
                        </div>
                        <!--end::Info-->                        
                    </div>
                    <!--end::User-->

                    <!--begin::Actions-->
                    <div class="d-flex my-4">
                        <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                            <?php echo Theme::getIcon("check", "fs-2 d-none")?>
                            <?php Theme::getView('partials/general/_button-indicator', array('label' => 'Follow'))?>
                        </a>
                        
                        <a href="#" class="btn btn-sm btn-primary me-2" <?php Theme::linkModal('offer-a-deal')?> >Hire Me</a>

                        <!--begin::Menu-->
                        <div class="me-0">
                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="bi bi-three-dots fs-3"></i>
                            </button>
                            <?php Theme::getView('partials/menus/_menu-3')?>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Title-->

                <!--begin::Stats-->
                <div class="d-flex flex-wrap flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-grow-1 pe-8">
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <?php echo Theme::getIcon("arrow-up", "fs-2 text-success me-2")?>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">Earnings</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <?php echo Theme::getIcon("arrow-down", "fs-2 text-danger me-2")?>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                </div>
                                <!--end::Number-->

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">Projects</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <?php echo Theme::getIcon("arrow-up", "fs-2 text-success me-2")?>
                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                </div>
                                <!--end::Number-->                                

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Progress-->
                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                            <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                            <span class="fw-bold fs-6">50%</span>
                        </div>

                        <div class="h-5px mx-3 w-100 bg-light mb-3">
                            <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::Details-->   

        <!--begin::Navs-->
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
            <?php foreach($nav as $each):?>
                <!--begin::Nav item-->
                <li class="nav-item mt-2">
                    <a class="nav-link text-active-primary ms-0 me-10 py-5 <?php Util::putIf(Theme::getPagePath() === $each['view'], 'active')?>" href="<?php echo Theme::getPageUrl($each['view'])?>">
                        <?php echo $each['title']?>
                    </a>
                </li>
                <!--end::Nav item-->
            <?php endforeach?>
        </ul>
        <!--begin::Navs-->
    </div>
</div>
<!--end::Navbar-->