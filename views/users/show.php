<!DOCTYPE html>
<html lang="pt-br">
    <?php include 'views/partials/head.php'; ?>
    <body class="dark:bg-slate-900">
        <div class="container mx-auto px-4 py-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold dark:text-white">User</h1>

                <a href="/users" class="flex items-center dark:text-white text-sm text-primary-500 dark:text-primary-400 hover:bg-gray-700 p-2 rounded-lg transition-colors duration-300">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="inline-block w-4 h-4 mr-1"
                    >
                        <path d="M19 12H5M12 19l-7-7 7-7"></path>
                    </svg>

                    Back to users
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <div class="p-4">
                    <h3 class="dark:text-white font-semibold mb-1 text-white"><?= $user['name'] ?></h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-2">
                        <?= $user['email'] ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>