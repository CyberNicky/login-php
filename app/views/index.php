<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <form action="login.php" method="post">
        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
            <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-96 rounded-lg">
                <div class="divide-y divide-gray-300/50 w-full">
                    <div class="space-y-6 py-8 text-base  text-gray-600">

                        <?php if (isset($_GET['message'])) : ?>
                            <p class="text-sm text-red-500"><?= $_GET['message']; ?></p>
                        <?php endif; ?>

                        <p class="text-xl font-medium leading-7">Login</p>
                        <div class="space-y-4 flex flex-col">
                            <input type="text" name="username" placeholder="Username" class="border border-gray-300/50 p-1 rounded focus:outline-none" />

                            <input type="password" name="password" placeholder="Password" class="border border-gray-300/50 p-1 rounded focus:outline-none" />
                        </div>
                    </div>
                    <div class="pt-8 text-base font-semibold leading-7">
                        <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded">
                            Entrar
                        </button>
                    </div>
                </div>
            </div>
            }
        </div>
    </form>


</body>

</html>