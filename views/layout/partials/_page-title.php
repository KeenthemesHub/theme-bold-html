<?php
    $breadcrumb = Bootstrap::getBreadcrumb();
    $title = Theme::getOption('page', 'title');
    $attributes = Theme::getOption('layout', 'app/page-title/attributes');
    $index = 0;

    if (Theme::getPagePath() === "index" || Theme::pagePathStartsWith("account")) {
        $title = "Account";
        
        $breadcrumb = array(
            array(
                "title" => "Home",
                "path" => "index"
            ),
            array(
                "title" => "Account",
            ),
            array(
                "title" => "Overview",
                "active" => true
            )
        );
    } else if (Theme::pagePathStartsWith("pages/user-profile")) {
        $title = "User Profile";

        
        $breadcrumb = array(
            array(
                "title" => "Home",
                "path" => "index"
            ),
            array(
                "title" => "Pages",
            ),
            array(
                "title" => "User Profile",
                "active" => true
            )
        );
    }
?> 

<!--begin::Page title-->
<div class="page-title d-flex align-items-center gap-1 me-3" <?php Util::putHtmlAttributes($attributes)?>>
    <!--begin::Title-->
    <span class="text-gray-900 fw-bolder fs-2x lh-1">
        <?php echo $title?>        
    </span>
    <!--end::Title--> 

    <?php if ( Theme::getOption('layout', 'app/breadcrumb/display') === true && !empty($breadcrumb)):?>  
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3 d-flex mb-0">        
            <?php foreach ($breadcrumb as $item):?>  
                <?php 
                    $index++;
                ?>           
                <!--begin::Item-->
                <?php if ($index === count($breadcrumb)):?>
                    <li class="breadcrumb-item text-gray-500">
                        <?php echo $item['title']?>
                    </li>
                <?php else:?>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <?php if (isset($item['path']) && !empty($item['path']) ):?>
                            <a href="<?php echo Theme::getPageUrl($item['path'])?>" class="text-gray-700 text-hover-primary">
                                <?php if($item['title'] === "Home"):?>
                                    <?php echo Theme::getIcon("home", "fs-3 text-gray-500 ms-2")?>  
                                <?php else:?>
                                    <?php echo $item['title']?>
                                <?php endif?>
                            </a>
                        <?php else:?>
                            <?php echo $item['title']?>
                        <?php endif?>
                    </li>
                <?php endif?>
                <!--end::Item-->

                <?php if (next($breadcrumb)):?>
                    <!--begin::Item-->
                    <li class="breadcrumb-item mx-n1">
                        <?php echo Theme::getIcon("right", "fs-4 text-gray-700")?>                        
                    </li>
                    <!--end::Item-->
                <?php endif?>                        
            <?php endforeach?>
        </ul>
        <!--end::Breadcrumb-->
    <?php endif;?>
</div>
<!--end::Page title-->