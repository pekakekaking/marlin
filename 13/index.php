<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
    <!-- <link rel="stylesheet" href="./css/output.css"> -->
</head>
<body>
<?php
session_start();
var_dump($_SESSION['password']);
?>

<div class="w-[1200px] pb-5">
    <div class="mt-12 ml-12 flex justify-between">
        <form class="w-[450px]" method="POST" action="back.php">
            <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white">
                Генератор пароля</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Введите
                число от 8 до 20 и скрипт сгенерирует уникальный пароль.</p>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="w-[350px]">
                    <div class="mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                         role="alert">
                        <?php echo $_SESSION['message'];
                        unset($_SESSION['message']); ?>
                    </div>
                </div>
            <?php endif; ?>
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Введите
                число</label>
            <input type="text" id="large-input" name="length"
                   class="block p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button type="submit"
                    class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Сгенерировать пароль
            </button>
        </form>

        <?php if (isset($_SESSION['password'])): ?>
            <div class="w-[600px] pt-5">
                <h1 class="max-w-2xl mb-4 text-xl font-bold tracking-tight leading-none dark:text-white">Сгенерированный
                    пароль</h1>
                <div class="w-full mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                    <?php echo $_SESSION['password'];
                    unset($_SESSION['password']); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>


<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
</body>
</html>