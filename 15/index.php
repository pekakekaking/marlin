<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Последнее в блоге</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
</head>
<body>
<?php
if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}
include 'back.php';
?>
<h1 class="text-5xl font-extrabold ml-36 mt-5 mb-5 dark:text-white">Последнее в блоге</h1>

<div class="flex justify-self-auto flex-wrap pb-10 px-10 mx-auto w-[1300px]">
    <?php foreach ($postsPerPage[$_GET['page'] - 1] as $post): ?>
        <?php foreach ($post as $title => $content): ?>
            <a href="#"
               class="block max-w-sm p-6 mb-5 mx-2.5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $title; ?></h5>
                <p class="font-normal text-gray-700 dark:text-gray-400"><?php echo $content; ?></p>
            </a>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
<div class="flex justify-center mb-20">
    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-base h-10">
            <?php if ($_GET['page'] > 1): ?>
                <li>
                    <a href="<?php echo '?page=' . $_GET['page'] - 1; ?>"
                       class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Назад</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 0; $i < $pages; $i++): ?>
                <li>
                    <a href="<?php echo '?page=' . $i + 1; ?>"
                        <?php if ($_GET['page'] == $i + 1): ?>
                            class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
                        <?php else: ?>
                            class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        <?php endif; ?>
                    ><?php echo $i + 1; ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($_GET['page'] < $pages): ?>
                <li>
                    <a href="<?php echo '?page=' . $_GET['page'] + 1; ?>"
                       class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Вперед</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>


<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
</body>
</html>