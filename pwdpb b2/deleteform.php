<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/tailwind.config.js"></script>
    <title>Delete Formulir Page</title>

    <?php
  include "nav.php";
  echo "<br><br>";
    ?>

</head>

<body>

    <section class="bg-white dark:bg-gray-900 ">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16 border border-gray-700 rounded-lg">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Hapus keluhan</h2>
            <form action="assets/script/Delete.php" method="post">
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div>
                        <label for="idpc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID
                            PC</label>
                        <select id="idpc" name="idpc"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <?php
                            require "assets/script/displayid.php";
                            ?>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['idpc']; ?> </option>
    <?php 
    }
   ?>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="nokeluhan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Perawatan</label>
                        <input type="text" name="noperawatan" id="noperawatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="" placeholder="No. Perawatan Anda">
                    </div>
                    
                <div class="flex items-center space-x-4">
                <button type="submit"
                        class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Hapus
                    </button>
                    <a href="mainpage.php">
                    <button type="button"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Input Form
                    </button>
                    </a>
                    <a href="ubahform.php" ><button type="button"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Ubah Form
                    </button></a>
                    
                </div>
            </form>
        </div>
    </section>


</body>

</html>