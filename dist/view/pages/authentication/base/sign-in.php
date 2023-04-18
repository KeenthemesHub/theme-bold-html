<?php Theme::beginPageLayout('pages/authentication/base/_layout', array('comment' => 'Sign-in', 'wrapperClass' => 'w-lg-500px'))?>

<?php Theme::getView("pages/authentication/_forms/_sign-in", array(
    "signUpPath" => "authentication/sign-up/basic",
    "passwordResetUpPath" => "authentication/sign-in/password-reset"
))?>

<?php Theme::endPageLayout()?>