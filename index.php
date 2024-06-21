<?php
include __DIR__.'/../../../core/html/init.php';

Theme::init('bold');
Theme::setViewMode('dev');
Theme::setFreeVersion(false); // Set free version flag
Theme::run();