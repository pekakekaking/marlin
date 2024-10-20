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

<?php

session_start();

class database
{
    private static $connection;

    public static function connect()
    {
        self::$connection = mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin");
        return self::$connection;
    }
}

//$conn = mysqli_connect("127.0.0.1", "marlin", "AfiDAr3E6LfD6i4S", "marlin");
$query = "SELECT filename,user_id FROM images";

$conn = database::connect();
$result = mysqli_query($conn, $query);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="w-[600px] mx-auto p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
         role="alert">
        <?php echo $_SESSION['error'];
        ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
    <div class="w-[600px] mx-auto p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
         role="alert">
        <?php echo $_SESSION['success'];
        ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                       aria-current="page"><?php
                            $findId=$_SESSION['user_id'];
                            $username = mysqli_query($conn, "SELECT id,email FROM users WHERE id='$findId'");
                           $usernameFetched = mysqli_fetch_all($username, MYSQLI_ASSOC);
                            echo $usernameFetched[0]['email'];

                            ?></a>
                </li>
                <?php if(!isset($_SESSION['user_id'])):?>
                <li>
                    <a href="register.php"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                </li>
                <li>
                    <a href="login.php"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                </li>
                <?php endif;?>
                <?php if(isset($_SESSION['user_id'])):?>
                <li>
                    <a href="logout.php"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>


<!--<div>-->
<!--    <a href="login.php">Login</a>-->
<!--    <a href="logout.php">Logout</a>-->
<!--    <a href="register.php">Register</a>-->
<!--    --><?php
//    $findId=$_SESSION['user_id'];
//    $username = mysqli_query($conn, "SELECT id,email FROM users WHERE id='$findId'");
//    $usernameFetched = mysqli_fetch_all($username, MYSQLI_ASSOC);
//    echo $usernameFetched[0]['email'];
//
//    ?>
<!--</div>-->
<div class="w-[1200px] pb-5">
    <div class="mt-12 ml-12 flex justify-between">

        <form class="w-[400px]" method="POST" action="upload.php" enctype="multipart/form-data">
            <h1 class="max-w-2xl mb-4 text-3xl font-extrabold tracking-tight leading-none md:text-5xl dark:text-white">
                Загрузите фото</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Загрузите свои фотографии в альбом, чтобы сохранить их и поделиться с друзьями.</p>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Загрузить
                фото</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                   aria-describedby="user_avatar_help" id="user_avatar" name="file[]" type="file" multiple>
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Загружайте изображения в
                форматах JPG и PNG
            </div>
            <button type="submit">Upload</button>
        </form>

        <div class="w-[600px] grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($images as $image): ?>

                <?php if (!isset($_SESSION['user_id'])): ?>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                             src="uploads/<?php echo $image['filename']; ?>" alt="">
                    </div>
                <?php endif; ?>
                <?php if ($image['user_id'] == $_SESSION['user_id']): ?>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                             src="uploads/<?php echo $image['filename']; ?>" alt="">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="https://happyhaha.github.io/css/dist/flowbite.min.js"></script>
</body>
</html>