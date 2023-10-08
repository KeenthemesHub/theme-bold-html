<!--begin::Form group-->
<div class="form-group d-flex flex-stack">           
    <!--begin::Heading-->     
    <div class="d-flex flex-column">
        <h4 class="fw-bold text-gray-900">Fixed</h4>
        <div class="fs-7 fw-semibold text-muted">
            Fixed header mode
        </div>							
    </div>
    <!--end::Heading-->

    <!--begin::Option-->
    <div class="d-flex justify-content-end">
        <!--begin::Check-->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch me-10">
            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][desktop]"/>
            <input 
                class="form-check-input w-45px h-30px" 
                type="checkbox" 
                <?php Util::putIf(Theme::getOption('layout', 'app/header/default/fixed/desktop') === true, 'checked')?> 
                value="true" 
                name="layout-builder[layout][app][header][default][fixed][desktop]" 
                id="kt_builder_header_fixed_desktop"/>

            <!--begin::Label-->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_desktop">Desktop Mode</label>
            <!--end::Label-->
        </div>
        <!--end::Check-->

        <!--begin::Check-->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][header][default][fixed][mobile]"/>
            <input 
                class="form-check-input w-45px h-30px" 
                type="checkbox" 
                <?php Util::putIf(Theme::getOption('layout', 'app/header/default/fixed/mobile') === true, 'checked')?> 
                value="true" 
                name="layout-builder[layout][app][header][default][fixed][mobile]" 
                id="kt_builder_header_fixed_mobile"/>

            <!--begin::Label-->
            <label class="form-check-label text-gray-700 fw-bold" for="kt_builder_header_fixed_mobile">Mobile Mode</label>
            <!--end::Label-->
        </div>
        <!--end::Check-->
    </div>
    <!--end::Option-->
</div>
<!--end::Form group-->