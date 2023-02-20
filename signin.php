<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
  </head>
  <body class="bg-gray-100">
    <div class="w-full max-w-xs mx-auto mt-20">
      <form class="bg-white shadow-md rounded px-8 py-8 pt-8" action="localcabinet.php" method="post">
       
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email">
          Имя пользователя
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="email" type="text">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 font-bold mb-2" for="password">
            Пароль
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Введите пароль">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 font-bold mb-2" for="password">
            Подтвердите Пароль
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirm" id="password" type="password" placeholder="Введите пароль">
        </div>
        <div class="flex items-center justify-between">
          <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Вход
          </button>
          <a class="ml-3 inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Забыли пароль?
          </a>
        </div>
      </form>
    </div>
    <footer class="bg-white dark:bg-gray-900 rounded-md">
        <div class="container flex flex-col items-center justify-between px-6 py-8 mx-auto lg:flex-row">        
            <div class="flex flex-wrap items-center justify-center gap-4 mt-6 lg:gap-6 lg:mt-0">
                <a href="https://github.com/424Nkita-Csharsfta4" target="_blank" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Frontend
                </a>
    
                <a href="https://github.com/VladislaVFEABE" target="_blank" class="text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400">
                    Backend
                </a>    
            </div>
    
            <p class="mt-6 ml-3 text-sm text-gray-500 lg:mt-0 dark:text-gray-400">© Созданно в 2023 Студенты 313гр. </p>
        </div>
    </footer>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="./js/addpost.js"></script>
  </body>
</html>
