<?php
require_once '../config/Database.php';
require_once '../classes/Auth.php';

$db = new Database();
$conn = $db->getConnection();
$auth = new Auth($conn);

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($auth->login($username, $password)) {
    $level = $auth->getLevel();

    if ($level == 0) {
        header("Location: ../views/admin_dashboard.php");
    } elseif ($level == 1) {
        header("Location: ../views/user_dashboard.php");
    } else {
        echo "Unknown level detected.";
    }
} else {
    echo "Login failed. <a href='../views/login.php'>Try again</a>";
}
?>
