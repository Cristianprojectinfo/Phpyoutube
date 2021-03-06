<?php
global $global, $config;
if (!isset($global['systemRootPath'])) {
    require_once '../videos/configuration.php';
}
require_once $global['systemRootPath'] . 'objects/user.php';
$obj = new stdClass();
$obj->error = true;
$obj->msg = "Unknown error";

if (!empty($_GET['users_id'])) {
    $user = new User($_GET['users_id']);
    $verified = $user->getEmailVerified();
    if (empty($verified)) {
        if (User::sendVerificationLink($_GET['users_id'])) {
            $obj->error = false;
            $obj->msg = __("Verification Sent");
        }
    } else {
        $obj->msg = __("Already verified");
    }
} elseif (!empty($_GET['code'])) {
    $result = User::verifyCode($_GET['code']);

    if ($result) {
        $msg = __("Email Verified");
        header("Location: {$global['webSiteRootURL']}?success={$msg}");
    } else {
        $msg = __("Email verification error");
        header("Location: {$global['webSiteRootURL']}?error={$msg}");
    }
}

header('Content-Type: application/json');
die(json_encode($obj));
