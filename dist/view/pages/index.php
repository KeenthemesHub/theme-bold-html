<!--begin::Row-->
<div class="row gy-5 g-xl-10 mb-xl-10">
    <!--begin::Col-->
    <div class="col-xl-12 col-xxl-4">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-md-6 col-xxl-12">
                <?php Theme::getView('partials/widgets/cards/_widget-1', array(
                    'class' => 'h-xl-100', 
                    'bgColor' => '#22232B', 
                    'borderColor' => 'rgba(255, 255, 255, 0.15)',  
                    'chartColor' => 'primary'            
                ))?>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-md-6 col-xxl-12">
                <?php Theme::getView('partials/widgets/lists/_widget-1', array('class' => 'h-lg-100')) ?>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->      
    </div>
    <!--end::Col-->  

    <!--begin::Col-->
    <div class="col-xl-8">
         <?php Theme::getView('partials/widgets/charts/_widget-16', array('class' => 'h-xl-100')) ?>
    </div>
    <!--end::Col-->     
</div>
<!--end::Row--> 

<!--begin::Row-->
<div class="row gx-5 gx-xl-10">  
    <!--begin::Col-->
    <div class="col-xl-4 mb-5 mb-xl-10">       
        <?php Theme::getView('partials/widgets/charts/_widget-29', array('class' => 'h-xl-100'))?>
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-xl-8 mb-5 mb-xl-10">       
        <?php Theme::getView('partials/widgets/charts/_widget-24', array('class' => 'h-xl-100', 'chartHeight' => '300px'))?>
    </div>
    <!--end::Col-->    
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10"> 
    <!--begin::Col-->
    <div class="col-xl-4">
        <?php Theme::getView('partials/widgets/engage/_widget-1', array(
            'class' => 'h-md-100', 
            'image-class' => 'h-125px',
            'description' => 'Have your tried <br/> new',
            'title' => 'Invoice Manager?',
            'image' => 'svg/illustrations/easy/2.svg',
            'primaryLinkText' => 'Try Now',
            'primaryLinkAttributes' => array('data-bs-target' => '#kt_modal_offer_a_deal', 'data-bs-toggle' => 'modal'),     
            'secondaryLinkText' => 'Learn More',
            'secondaryLinkAttributes' => array('href' => Theme::getPageUrl('account/billing'))
        ))?>
    </div>
    <!--end::Col-->   
    
    <!--begin::Col-->
    <div class="col-xl-8">
        <?php Theme::getView('partials/widgets/engage/_widget-7', array('class' => 'h-xl-100'))?>
    </div>
    <!--end::Col-->  
</div>
<!--end::Row-->