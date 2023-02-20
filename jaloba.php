<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Обратная связь</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 h-screen flex flex-col justify-center items-center">
  <div class="bg-white p-8 rounded shadow-md">
    <h1 class="text-2xl font-bold mb-4">Недостатки</h1>
    <form id="feedback-form" class="flex flex-col">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">Имя</label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="name" type="text" placeholder="Введите ваше имя">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
        <input
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="email" type="email" placeholder="Введите ваш email">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="message">Сообщение</label>
        <textarea
          class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="message" rows="5" placeholder="Введите сообщение"></textarea>
      </div>
      <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit">Отправить</button>
    </form>
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

      <p class="mt-6 ml-3 text-sm text-gray-500 lg:mt-0 dark:text-gray-400">© Созданно в 2023 Студенты 313гр. </p>
    </div>
  </footer>
  <script src="./js/jaloba.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>