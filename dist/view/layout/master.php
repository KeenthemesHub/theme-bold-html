<?php
    $layout = Theme::getOption('layout', 'main/type');

    Theme::addHtmlClass('body', 'app-' . $layout);
    Theme::getView('layout/' . '_' . $layout);
?>