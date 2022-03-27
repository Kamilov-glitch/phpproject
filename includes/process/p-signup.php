<?php

$h = new Helper();
$msg = '';
$username = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    if ($h->isEmpty([$username, $_POST['password'], $_POST['confirm_password']])) {
        $msg = "All field required to be filled!";
    } elseif(!$h->isValidLength($username, 6, 100)) {
        $msg = "The length of username can only be between 6 and 100!";
    } elseif(!$h->isValidLength($_POST['password'])) {
        $msg = "The length of password can only be between 8 and 20";
    } elseif(!$h->isSecure($_POST['password'])) {
        $msg = "Password should contain at least one lowercase character,
                one uppercase character and one digit.";
    } elseif(!$h->passwordsMatch($_POST['password'], $_POST['confirm_password'])) {
        $msg = "Password and confirm password fields should match!";
    } else {

        $member = new BlogMember($username);

        if ($member->isDuplicateID) {
            $msg = "That username is already in use, please choose another one!";
        } else {
            $member->insertIntoMemberDB($_POST['password']);
            header("Location: index.php?new=1");
        }
    }
}

