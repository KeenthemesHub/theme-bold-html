<?php Theme::beginPageLayout('pages/authentication/base/_layout', array('comment' => 'Sign-up', 'wrapperClass' => 'w-lg-600px'))?>

<?php Theme::getView("pages/authentication/_forms/_sign-up", array(
    "signInPath" => "authentication/sign-in/basic",
))?>

<?php Theme::endPageLayout()?>