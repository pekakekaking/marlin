<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
</head>
<body>
<?php
require_once "back_index_store.php";
require_once 'back_complete.php';
?>

<h1 class="max-w-full mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white text-center">
    Список задач</h1>

<div class="relative overflow-x-auto sm:rounded-lg w-[80%] mx-auto mt-9">
    <a href="add.php"
       class="inline-block focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Добавить
        задачу</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-5">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                ID
            </th>

            <th scope="col" class="px-6 py-3">
                Наименование
            </th>

            <th scope="col" class="px-6 py-3">
                Выполнено
            </th>

            <th scope="col" class="px-6 py-3">
                Дата добавления
            </th>

            <th scope="col" class="px-6 py-3">
                Действия
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($fetchTasks as $task): ?>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $task[0] ?>
                </th>

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="#">
                        <?php echo $task[1] ?>
                    </a>
                </th>

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <span class="<?php echo $task[2] == 1 ? "bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300" : "bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300" ?>"><?php echo $task[2] == 1 ? 'Да' : 'Нет' ?></span>
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php $date = explode('-', $task[3]);
                    echo date("d/m/Y", mktime(0, 0, 0, $date[1], $date[2], $date[0])); ?>
                </th>

                <td class="px-6 py-4">
                    <?php if ($task[2] == '1'): ?>
                        <a href="?complete=0&id=<?php echo $task[0]?>"
                           class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Возобновить</a>
                    <?php endif; ?>
                    <?php if($task[2] !== '1'):?>
                        <a href="?complete=1&id=<?php echo $task[0]?>"
                           class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Завершить</a>
                    <?php endif;?>

                    <a href="edit.php?id=<?php echo $task[0]?>"
                       class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Изменить</a>
                    <form action="back_destroy.php" method="POST" class="inline-block">
                        <input type="hidden" value="<?php echo $task[0]?>" name="task_id">
                        <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                onClick="return confirm('Вы уверены?')">Удалить
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>



        </tbody>
    </table>
</div>


<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>

</body>
</html>