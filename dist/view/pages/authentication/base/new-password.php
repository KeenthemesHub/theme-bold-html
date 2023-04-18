<?php Theme::beginPageLayout('pages/authentication/base/_layout', array('comment' => 'New password', 'wrapperClass' => 'w-lg-550px'))?>

<?php Theme::getView("pages/authentication/_forms/_new-password", array(
    "signInPath" => "authentication/sign-in/basic",
))?>

<?php Theme::endPageLayout()?>