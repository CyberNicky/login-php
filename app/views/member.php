<?php
session_start();

if (!isset($_SESSION['login']) || !$_SESSION['login'] ) {
    header("Location: index.php?message=".urlencode('please login first'));
    exit();
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto rounded-lg">
        <div class="divide-y divide-gray-300/50 w-full">
            <div class="space-y-6 py-8 text-base text-gray-600">
                <p class="text-xl font-medium leading-7">Welcome to my page</p>
            </div>

            <div class="pt-8 text-base font-semibold">
                <a href="logout.php" class="bg-sky-500 hover:bg-sky-600 px-4 py-2 text-white rounded">Logout</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>