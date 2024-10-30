<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задача</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
</head>
<body>
<?php require_once "back_show.php"; ?>

<h1 class="max-w-full mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white text-center">
    Изменить задачу</h1>

<div class="relative overflow-x-auto sm:rounded-lg w-[40%] mx-auto mt-9">
    <form class="p-3" method="POST" action="back_update.php?id=<?php echo $_GET['id'] ?>">
        <div class="mb-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Что сделать</label>
            <input type="text" id="text" value="<?php echo $name ?>" name="name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required/>
        </div>
        <div class="mb-5">
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Дата
                добавления</label>
            <input type="date" id="number" value="<?php echo $date ?>" name="date"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required/>
        </div>
        <button type="submit"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
            Изменить задачу
        </button>
    </form>
</div>


<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>

</body>
</html>