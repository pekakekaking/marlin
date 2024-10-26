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
$posts = [
    ['Влияние импрессионизма на современное искусство' => 'Краткий обзор того, как импрессионисты изменили мир живописи 
    и продолжают вдохновлять художников сегодня.'],
    ['Велоспорт: польза для здоровья
            и экологии' => 'Как езда на велосипеде помогает поддерживать физическую
            форму и заботиться об окружающей среде.'],
    ['Секреты акварельной
            живописи' => 'Основные техники и советы для начинающих художников,
            работающих с акварелью.'],
    ['Футбол: развитие тактического
            мышления' => 'Роль тактики в современном футболе и как её развитие
            помогает командам достигать успехов.'],
    ['Роль цвета в абстрактном
            искусстве' => 'Почему цвет играет ключевую роль в абстракционизме и как
            художники используют его для выражения эмоций.'],
    ['Преимущества йоги для
            спортсменов' => 'Как регулярные занятия йогой могут улучшить физическую
            подготовку и восстановление после тренировок'],
    ['Искусство скульптуры: прошлое и
            настоящее' => 'Эволюция скульптуры от древних времён до современных
            технологий и материалов.'],
    ['Бег на длинные дистанции:
            советы для начинающих' => 'Как начать бегать на длинные дистанции, избегая травм и
            поддерживая мотивацию.'],
    ['Современная фотография: тренды
            и техники' => 'Анализ современных тенденций в фотографии и советы по
            использованию новых техник для создания впечатляющих снимков.'],
    ['Влияние импрессионизма на
            современное искусство' => 'Краткий обзор того, как импрессионисты изменили мир
            живописи и продолжают вдохновлять художников сегодня.'],
    ['Футбол: Чемпионат мира
            2022' => 'Обзор самых ярких моментов и результатов Чемпионата мира
            по футболу 2022 в Катаре.'],
    ['Тайны Леонардо да Винчи' => 'Раскрываем некоторые загадки и тайны, окружающие жизнь и
            творчество великого мастера эпохи Возрождения.'],
    ['Баскетбол: NBA плей-офф' => 'Анализ самых интересных матчей и прогнозы на финал
            плей-офф NBA.'],
    ['Скульптура: от античности до
            современности' => 'Исторический обзор развития скульптуры, от древних
            времен до наших дней.'],
    ['Теннис: турнир Большого
            шлема' => 'Обзор одного из турниров Большого шлема по теннису, с
            описанием ключевых матчей и игроков.'],
    ['Фотография как искусство' => 'Размышления о том, как фотография стала самостоятельным
            видом искусства и какие направления в ней существуют.'],
];
if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}
$paginate = 6;
(int)$pages = ceil(count($posts) / $paginate);
$postsPerPage = array_chunk($posts, $paginate);
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