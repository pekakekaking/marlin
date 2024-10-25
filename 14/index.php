<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
    <!--    <link rel="stylesheet" href="./css/output.css">-->
</head>
<body>
<?php
session_start();


?>


<div class="pb-5 px-10">
    <div class="mt-12 ml-12 justify-between gap-5">
        <form class="w-full" action="back.php" method="POST">
            <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white">
                Конвертер валют</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Введите
                сумму, которую вы хотите сконвертировать в rub, выберите исходную валюту и нажмите
                "Конвертировать".</p>

            <?php if (isset($_SESSION['message'])): ?>
                <div class="w-[350px]">
                    <div class="mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                         role="alert">
                        <?php echo $_SESSION['message'];
                        unset($_SESSION['message']); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="w-1/2 pt-5">
                <h1 class="max-w-2xl mb-4 text-xl font-bold tracking-tight leading-none dark:text-white">Из валюты</h1>
                <select id="countries" name="currency"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="usd">USD - Доллар США</option>
                    <option value="eur">EUR - Евро</option>
                    <option value="gpb">GPB - Фунт стерлингов</option>
                </select>
            </div>

            <div class="w-1/2 pt-5">
                <h1 class="max-w-2xl mb-4 text-xl font-bold tracking-tight leading-none dark:text-white">В валюту</h1>
                <select id="country"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option>RUB</option>
                </select>

            </div>

            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Введите
                сумму</label>
            <input type="text" id="large-input" name="sum"
                   class="block p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <button type="submit"
                    class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Конвертировать
            </button>
        </form>

        <?php if (isset($_SESSION['result'])): ?>
            <div class="w-1/2 pt-5">
                <h1 class="max-w-2xl mb-4 text-xl font-bold tracking-tight leading-none dark:text-white">Результат</h1>
                <div class="w-full mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                    Сумма: <?php echo $_SESSION['sum']; ?> <br>
                    Из валюты: <?php echo $_SESSION['currency']; ?> <br>
                    В валюту: rub <br> <br>

                    <b>Результат: <?php echo $_SESSION['sum'] . " " . $_SESSION['currency']; ?>
                        = <?php echo $_SESSION['result'] ?> rub</b>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
</body>
</html>