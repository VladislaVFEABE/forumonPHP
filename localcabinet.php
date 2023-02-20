<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <a href="#" class="flex-shrink-0 flex items-center">
                        <img class="block lg:hidden h-8 w-auto" src="https://avatars.mds.yandex.net/i?id=b0c8463d14c8f23b9c251fb07c1680bc-4012386-images-thumbs&n=13" alt="Logo">
                        <img class="hidden lg:block h-8 w-auto" src="https://avatars.mds.yandex.net/i?id=b0c8463d14c8f23b9c251fb07c1680bc-4012386-images-thumbs&n=13" alt="Logo">
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="ml-3 relative">
                        <div>
                            <button class="bg-white rounded-full flex text-sm focus:outline-none focus:shadow-outline">
                                <span class="sr-only">Открыть меню пользователя</span>
                                <img class="h-5 w-5 rounded-full" src="https://grizly.club/uploads/posts/2022-12/1670794153_grizly-club-p-shesterenka-png-1.png" alt="">
                            </button>
                        </div>
                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                            <div class="py-1 rounded-md bg-white shadow-xs">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Настройки</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Выход</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-3xl font-bold mb-4">Личный кабинет</h1>
            <div class="bg-white shadow-md rounded px-8 py-8 pt-8 mb-4">
                <h2 class="text-gray-700 font-bold mb-2">Персональная информация</h2>
                <?php
include("sql.php");
$name =  $_POST['name'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$connect =mysqli_connect('localhost', 'root', '', 'forum');
$sql = $connect->query("SELECT * FROM `users` WHERE name='{$name}' AND password='{$password}' AND password_confirm = '{$password_confirm}'");
$user = $sql->fetch_assoc();
if(count($user)==0){
    echo "Такой пользователь не найден.<br>Поля пустые введите логин и пароль";
    echo "<p>Не ваш аккаунт? Выход <a href='login.php'>здесь</a></p>";
    exit();
}
echo "<p style='color:red'>Вы авторизовались как  $name чтобы выйти нажмите <a href='gameover.php'>здесь</a></p>";
?>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="name">Имя</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                 value="<?= $name ?>" id="name" type="text">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="email"  value="<?= $email ?>"> 
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="phone">Телефон</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="phone" type="tel" value="+7 (123) 456-78-90">
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="h-32 w-32 rounded-full object-cover" src="https://sun9-east.userapi.com/sun9-29/s/v1/ig2/M4QKsXHrNTy-c27sHbLel6gbgwbUUyy9uG-fVwGlqVzk1n_6exKzCMZgHVbrZz4371Sj8SOzOqYPLnFtO5D6_hLC.jpg?size=564x564&quality=96&type=album" alt="Профиль">
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded px-8 py-8 pt-8 mb-4">
                <h2 class="text-gray-700 font-bold mb-2">Изменение пароля</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="current-password">Текущий
                                пароль</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="current-password" type="password">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="new-password">Новый пароль</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="new-password" type="password">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="confirm-password">Подтверждение
                                нового пароля</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="confirm-password" type="password">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded px-8 py-8 pt-8 mb-4">
                <h2 class="text-gray-700 font-bold mb-2">Адрес доставки</h2>
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="address">Адрес</label>
                            <textarea
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="address" rows="3">г. Москва, ул. Ленина, д. 1, кв. 1</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="postcode">Почтовый индекс</label>
                            <input
                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="postcode" type="text" value="123">
                        </div>
                    </div>
                </div>
            </div>

            <footer class="bg-white dark:bg-gray-900 rounded-md">
                <div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">
                    <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
                        <a href="https://github.com/424Nkita-Csharsfta4" target="_blank"
                            class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                            Frontend
                        </a>

                        <a href="https://github.com/VladislaVFEABE" target="_blank"
                            class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                            Backend
                        </a>
                    </div>

                    <p class="mt-6 ml-3 text-sm text-gray-500 lg:mt-0 dark:text-gray-400">© Созданно в 2023 Студенты
                        313гр. </p>
                </div>
            </footer>
            <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>