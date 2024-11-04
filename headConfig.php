<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
ini_set('session.use_strict_mode', 1);
// error_reporting(0);
//**********************************************//
//FOR VIEWING ALL ERROR LOGS BELOW//
error_reporting(E_ALL);
ini_set('html_error', 0);
error_reporting(-1);
ini_set('display_errors', 'On');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//**********************************************//

session_start();
// if (empty($_SESSION['crn_mobile']) && empty($_SESSION['crn_email']) && empty($_SESSION['crn_id']) && empty($_SESSION['crn_name']) || $_SESSION["token"] !== $_COOKIE['token']) {
//     header('Location: https://vans.mscorpres.co.in/login/logout?redirectTo=' . $_SERVER['REQUEST_URI']);
//     exit(json_encode([
//         'message' => 'eAuthentication Failed [LoggedIn again..]',
//         'code' => 'SNA401'
//     ]));
// }



$_SESSION['base_path'] = "http://localhost/well-known";
$_SESSION['api_path'] = "http://localhost:3000";
// $_SESSION["user_type"] = "developer";
// $_SESSION['crn_name'] = "CRN615672";
?>