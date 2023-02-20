<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление постов</title>
</head>

<body>
    <div class="w-full max-w-md mx-auto mt-20">
        <form class="bg-white shadow-md rounded px-8 py-8 pt-8">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">
                    Заголовок
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="title" type="text" placeholder="Введите заголовок">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="content">
                    Содержание
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="content" placeholder="Введите содержание"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    id="submit-post" type="button">
                    Добавить пост
                </button>
            </div>
        </form>
    </div>
    <div id="posts"></div>

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

            <p class="mt-6 ml-3 text-sm text-gray-500 lg:mt-0 dark:text-gray-400">© Созданно в 2023 Студенты 313гр. </p>
        </div>
    </footer>
    <script src="./js/addpost.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>