<!--begin::Sidebar toggle-->
<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
	<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
		<?php echo Theme::getIcon("abstract-14", "fs-2")?>
	</div>

	<!--begin::Logo image-->
    <a href="<?php echo Theme::getPageUrl('index')?>">
		<img alt="Logo" src="<?php echo Theme::getImageUrl('logos/default.svg')?>" class="h-20px"/>
    </a>
    <!--end::Logo image-->
</div>
<!--end::Sidebar toggle-->

<?php Theme::getView('layout/partials/header/_navbar')?>