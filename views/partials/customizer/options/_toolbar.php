<?php 
	$mode = isset($params["mode"]) ? $params["mode"] : "customize";
?>

<!--begin::Form group-->
<div class="form-group d-flex flex-stack">           
    <!--begin::Heading-->     
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-gray-900">Toolbar</h4>
        <div class="fs-7 fw-semibold text-muted">
            Enable or disable Toolbar

            <?php if($mode === "customize"):?>
				<a href="<?php echo Theme::getPageUrl('layout-builder')?>" class="fw-semibold text-primary">
					More layout options
				</a>
			<?php endif?>
        </div>							
    </div>
    <!--end::Heading-->

    <!--begin::Option-->
    <div class="d-flex justify-content-end">
        <!--begin::Check-->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][toolbar][display]"/>
            <input 
                class="form-check-input w-45px h-30px" 
                type="checkbox" 
                <?php Util::putIf(Theme::getOption('layout', 'app/toolbar/display') === true, 'checked')?> 
                value="true" 
                name="layout-builder[layout][app][toolbar][display]"
            />
        </div>
        <!--end::Check-->
    </div>
    <!--end::Option-->
</div>
<!--end::Form group-->