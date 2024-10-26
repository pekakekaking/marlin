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

$paginate = 6;
(int)$pages = ceil(count($posts) / $paginate);
$postsPerPage = array_chunk($posts, $paginate);