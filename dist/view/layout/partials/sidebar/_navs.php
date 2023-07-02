<!--begin::Navs-->
<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">    
	<div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper">    
		<div 
			id="kt_app_sidebar_navs_scroll"
			class="hover-scroll-y mx-3 my-2"    
        	data-kt-scroll="true"
        	data-kt-scroll-activate="true"
        	data-kt-scroll-height="auto"     
        	data-kt-scroll-dependencies="#kt_app_sidebar_header"
        	data-kt-scroll-wrappers="#kt_app_sidebar_navs" 
        	data-kt-scroll-offset="5px"
		>
			<?php Theme::getView('layout/partials/sidebar/_navs/_teams')?>
			<?php Theme::getView('layout/partials/sidebar/_navs/_menu')?>
		</div>
	</div>
</div>
<!--end::Navs-->

