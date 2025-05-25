<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RPG Login Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-900 text-white">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">🔐 RPG Access Realm</h2>
        <form action="../process/login_process.php" method="POST" class="space-y-4">
            <div>
                <label class="block mb-1">Username</label>
                <input type="text" name="username" required class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block mb-1">Password</label>
                <input type="password" name="password" required class="w-full p-2 rounded bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 p-2 rounded font-semibold">Enter Realm</button>
        </form>
    </div>
</body>
</html>
