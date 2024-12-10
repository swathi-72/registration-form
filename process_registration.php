<?php
session_start();

// Check if session array exists, if not initialize
if (!isset($_SESSION['registrations'])) {
    $_SESSION['registrations'] = [];
}

// Retrieve form data
$usn = $_GET['usn'] ?? '';
$uname = $_GET['uname'] ?? '';
$pswd = $_GET['pswd'] ?? '';
$bday = $_GET['bday'] ?? '';
$plang = isset($_GET['plang']) ? (array)$_GET['plang'] : [];
$pskill = $_GET['pskill'] ?? '';
$curbranch = $_GET['cur_branch'] ?? '';
$newbranch = $_GET['new_branch'] ?? '';

// Store form data into the session
$_SESSION['registrations'][] = [
    'usn' => $usn,
    'uname' => $uname,
    'bday' => $bday,
    'plang' => implode(', ', $plang),
    'pskill' => $pskill,
    'curbranch' => $curbranch,
    'newbranch' => $newbranch,
];

// Redirect to the view_users.php page
header("Location: view_users.php");
exit();
?>
