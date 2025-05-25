<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['level'] != 0) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Master</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-4">🧙 Game Master Control Panel</h1>
        <p>Welcome, <span class="text-blue-400 font-semibold"><?= $_SESSION['user']['username'] ?></span>!</p>
        <a href="../logout.php" class="inline-block mt-4 bg-red-600 hover:bg-red-700 px-4 py-2 rounded">Logout</a>
    </div>
</body>
</html>
