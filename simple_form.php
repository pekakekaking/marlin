<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Меню</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
    <!-- <link rel="stylesheet" href="./css/output.css"> -->
</head>
<body>

<div class="w-[600px] mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
    Действие выполнено успешно.
</div>
    
<div class="w-[600px] mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    Ошибка.
</div>

<?php session_start();
if(!isset($_SESSION['views'])){
    $_SESSION['views']=0;
}
$_SESSION['views']++;
?>

<div class="w-[1200px] pb-5">
    <div class="mt-12 ml-12 ">
        <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white">Счетчик просмотров</h1>
        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Количество просмотров — <?php echo $_SESSION['views']; ?></p>
        <!-- Выводим значение переменной 'views' -->
    </div>
</div>


<?php if (isset($_SESSION['error'])): ?>
    <div class="w-[600px] mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <?php echo $_SESSION['error']; ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

    
<form action="process.php" method="post" class="max-w-sm mx-auto mt-6">
    <div class="mb-5">
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Комментарий</label>
        <input type="text" id="large-input" name="comment" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Отправить</button>
</form>
  

    
    

    <script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
</body>
</html>