<?php Theme::beginPageLayout('pages/authentication/base/_layout', array('comment' => 'Password reset', 'wrapperClass' => 'w-lg-500px'))?>

<?php Theme::getView("pages/authentication/_forms/_password-reset", array(
    "signInPath" => "authentication/sign-in/basic",
    "newPasswordPath" => "authentication/sign-in/new-password",
))?>

<?php Theme::endPageLayout()?>