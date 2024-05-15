<!DOCTYPE html>
<html lang="pt-br">
    <?php include 'views/partials/head.php'; ?>
    <body class="dark:bg-slate-900">
        <div class="container mx-auto px-4 py-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold dark:text-white">List Users</h1>
            </div>
                <?php if (empty($users)): ?>
                    <div class="w-full flex items-center justify-center">
                        <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden p-4 text-center">
                            <h3 class="dark:text-white font-semibold mb-1 text-white">
                                No users found
                            </h3>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <?php foreach ($users as $user): ?>
                            <a href="/users/<?= $user['id'] ?>" class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:scale-105 transition-transform duration-300">
                                <div class="p-4">
                                    <h3 class="dark:text-white font-semibold mb-1 text-white"><?= $user['name'] ?></h3>
                                    <p class="text-gray-500 dark:text-gray-400 mb-2">
                                        <?= $user['email'] ?>
                                    </p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
        </div>        
    </body>
</html>