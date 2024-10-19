<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список товаров</title>
    <link rel="stylesheet" href="https://happyhaha.github.io/css/dist/style.min.css">
</head>
<body>



<h1 class="text-5xl font-extrabold ml-36 mt-5 mb-5 dark:text-white">Наши товары</h1>


<?php
$products = [
    [
        'title' => 'Apple Watch Series 7',
        'price' => 599,
        'rating' => 5.0,
        'description' => 'Самые продвинутые часы Apple.',
        'image' => 'https://happyhaha.github.io/css/dist/img/apple-watch.webp',
        'available' => false
    ],
    [
        'title' => 'Apple iPhone 14 Pro',
        'price' => 999,
        'rating' => 4.9,
        'description' => 'Мощный смартфон с потрясающей камерой.',
        'image' => 'https://happyhaha.github.io/css/dist/img/iphone14.webp',
        'available' => true
    ],
    [
        'title' => 'Samsung Galaxy Watch 5',
        'price' => 299,
        'rating' => 3.0,
        'description' => 'Стильные и функциональные умные часы.',
        'image' => 'https://happyhaha.github.io/css/dist/img/galaxy.webp',
        'available' => false
    ]
];
?>




<div class="flex justify-center flex-wrap pb-10">

    <?php foreach ($products as $product):?>

        <div class="<?php echo $product['available']?'':'opacity-50';?> w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="<?php echo $product['image'];?>" alt="<?php echo $product['title']?>" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $product['title']?></h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        <div class='star-rating' data-rating='<?php echo $product['rating']?>'></div>
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3"><?php echo $product['rating']?></span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo $product['price']?>$</span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>
                </div>
            </div>
        </div>

    <?php endforeach;?>



<!--    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">-->
<!--        <a href="#">-->
<!--            <img class="p-8 rounded-t-lg" src="https://happyhaha.github.io/css/dist/img/iphone14.webp" alt="product 1image" />-->
<!--        </a>-->
<!--        <div class="px-5 pb-5">-->
<!--            <a href="#">-->
<!--                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple iPhone 14 Pro, 128GB, фиолетовый</h5>-->
<!--            </a>-->
<!--            <div class="flex items-center mt-2.5 mb-5">-->
<!--                <div class="flex items-center space-x-1 rtl:space-x-reverse">-->
<!--                    <div class='star-rating' data-rating='4.9'></div>-->
<!--                </div>-->
<!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">4.9</span>-->
<!--            </div>-->
<!--            <div class="flex items-center justify-between">-->
<!--                <span class="text-3xl font-bold text-gray-900 dark:text-white">$999</span>-->
<!--                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">-->
<!--        <a href="#">-->
<!--            <img class="p-8 rounded-t-lg" src="https://happyhaha.github.io/css/dist/img/galaxy.webp" alt="product 1image" />-->
<!--        </a>-->
<!--        <div class="px-5 pb-5">-->
<!--            <a href="#">-->
<!--                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Samsung Galaxy Watch 5, черный, 44мм</h5>-->
<!--            </a>-->
<!--            <div class="flex items-center mt-2.5 mb-5">-->
<!--                <div class="flex items-center space-x-1 rtl:space-x-reverse">-->
<!--                    <div class='star-rating' data-rating='3.0'></div>-->
<!--                </div>-->
<!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">3.0</span>-->
<!--            </div>-->
<!--            <div class="flex items-center justify-between">-->
<!--                <span class="text-3xl font-bold text-gray-900 dark:text-white">$299</span>-->
<!--                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">-->
<!--        <a href="#">-->
<!--            <img class="p-8 rounded-t-lg w-26" src="https://happyhaha.github.io/css/dist/img/dell.webp" alt="product 1image" />-->
<!--        </a>-->
<!--        <div class="px-5 pb-5">-->
<!--            <a href="#">-->
<!--                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Dell XPS 13 Laptop</h5>-->
<!--            </a>-->
<!--            <div class="flex items-center mt-2.5 mb-5">-->
<!--                <div class="flex items-center space-x-1 rtl:space-x-reverse">-->
<!--                    <div class='star-rating' data-rating='2.5'></div>-->
<!--                </div>-->
<!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">2.5</span>-->
<!--            </div>-->
<!--            <div class="flex items-center justify-between">-->
<!--                <span class="text-3xl font-bold text-gray-900 dark:text-white">$1200</span>-->
<!--                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">-->
<!--        <a href="#">-->
<!--            <img class="p-8 rounded-t-lg" src="https://happyhaha.github.io/css/dist/img/macbook.webp" alt="product 1image" />-->
<!--        </a>-->
<!--        <div class="px-5 pb-5">-->
<!--            <a href="#">-->
<!--                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple MacBook Air M2</h5>-->
<!--            </a>-->
<!--            <div class="flex items-center mt-2.5 mb-5">-->
<!--                <div class="flex items-center space-x-1 rtl:space-x-reverse">-->
<!--                    <div class='star-rating' data-rating='5.0'></div>-->
<!--                </div>-->
<!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>-->
<!--            </div>-->
<!--            <div class="flex items-center justify-between">-->
<!--                <span class="text-3xl font-bold text-gray-900 dark:text-white">$1299</span>-->
<!--                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">-->
<!--        <a href="#">-->
<!--            <img class="p-8 rounded-t-lg" src="https://happyhaha.github.io/css/dist/img/watch.webp" alt="product 1image" />-->
<!--        </a>-->
<!--        <div class="px-5 pb-5">-->
<!--            <a href="#">-->
<!--                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Xiaomi Mi Band 7</h5>-->
<!--            </a>-->
<!--            <div class="flex items-center mt-2.5 mb-5">-->
<!--                <div class="flex items-center space-x-1 rtl:space-x-reverse">-->
<!--                    <div class='star-rating' data-rating='1.0'></div>-->
<!--                </div>-->
<!--                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">1.0</span>-->
<!--            </div>-->
<!--            <div class="flex items-center justify-between">-->
<!--                <span class="text-3xl font-bold text-gray-900 dark:text-white">$59</span>-->
<!--                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>



<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fullStar = '<svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>';

        const emptyStar = '<svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>';

        function renderStarRating(rating) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                stars += i <= rating ? fullStar : emptyStar;
            }
            return `<div class="flex items-center space-x-1 rtl:space-x-reverse">${stars}</div>`;
        }

        const ratingElements = document.querySelectorAll('.star-rating');
        ratingElements.forEach(element => {
            const rating = parseFloat(element.getAttribute('data-rating') || 0);
            element.innerHTML = renderStarRating(rating);
        });
    });
</script>
</body>
</html>