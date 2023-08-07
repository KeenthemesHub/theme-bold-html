<!--begin::Authentication - Multi-steps-->
<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-lg-row-auto w-xl-400px positon-xl-relative border-end">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-400px scroll-y">
            <!--begin::Header-->
            <div class="d-flex flex-row-fluid flex-column align-items-center align-items-lg-start p-15 p-lg-20">          
                <!--begin::Logo-->
                <a href="<?php echo Theme::getPageUrl('index')?>" class="mb-15 mb-lg-20">
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="theme-light-show h-40px h-lg-50px"/>
                    <img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default-dark.svg')?>" class="theme-dark-show h-40px h-lg-50px"/>                  
                </a>    
                <!--end::Logo-->

               <!--begin::Nav-->
               <div class="stepper-nav">            
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">  
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-3">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Account Type
                                </h3>

                                <div class="stepper-desc fw-normal">
                                    Select your account type
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper--> 

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 1-->                

                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper"> 
                            <!--begin::Icon-->
                            <div class="stepper-icon rounded-3">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Account Settings
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Setup your account settings
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper--> 

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 2-->                

                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title fs-2">
                                    Business Details
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Setup your business details
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 3-->   

                    <!--begin::Step 4-->
                    <div class="stepper-item" data-kt-stepper-element="nav">      
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">              
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title ">
                                    Billing Details
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Provide your payment info
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->           
                        
                        <!--begin::Line-->
                        <div class="stepper-line h-40px">
                        </div>
                        <!--end::Line-->
                    </div>
                    <!--end::Step 4--> 

                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">      
                        <!--begin::Wrapper-->  
                        <div class="stepper-wrapper">              
                            <!--begin::Icon-->
                            <div class="stepper-icon">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title ">
                                    Completed
                                </h3>
                                <div class="stepper-desc fw-normal">
                                    Your account is created
                                </div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Wrapper-->               
                    </div>
                    <!--end::Step 5-->      
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Header-->

            <!--begin::Illustration-->
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-250px" 
                style="background-image: url(<?php echo Theme::getIllustrationUrl('16.png')?>)"> 
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
            <div class="card w-lg-700px p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <?php Theme::getView('partials/modals/create-account/steps/_step-1')?>
                    </div>
                    <!--end::Step 1-->

                    <!--begin::Step 2-->
                    <div class="" data-kt-stepper-element="content">
                        <?php Theme::getView('partials/modals/create-account/steps/_step-2')?>
                    </div>
                    <!--end::Step 2-->

                    <!--begin::Step 3-->             
                    <div class="" data-kt-stepper-element="content">
                        <?php Theme::getView('partials/modals/create-account/steps/_step-3')?>
                    </div>              
                    <!--end::Step 3-->

                    <!--begin::Step 4-->
                    <div class="" data-kt-stepper-element="content">
                        <?php Theme::getView('partials/modals/create-account/steps/_step-4')?>
                    </div>            
                    <!--end::Step 4-->   
                    
                    <!--begin::Step 5-->
                    <div class="" data-kt-stepper-element="content">
                        <?php Theme::getView('partials/modals/create-account/steps/_step-5')?>
                    </div>            
                    <!--end::Step 5-->   

                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-15"> 
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"> 
                                <?php echo Theme::getIcon("arrow-left", "fs-4 me-1")?>
                                Previous
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                <span class="indicator-label">
                                    Submit
                                    <?php echo Theme::getIcon("arrow-right", "fs-4 ms-2")?>
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                Continue
                                <?php echo Theme::getIcon("arrow-right", "fs-4 ms-1")?>
                            </button>
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
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
<!--end::Authentication - Multi-steps-->