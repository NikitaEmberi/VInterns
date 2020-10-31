<?php
   require("../includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Example</title>
</head>
<body class="bg-gray-900">

    <header class=" text-gray-500 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-teal-500 rounded-full" viewBox="0 0 24 24">
                  <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">vIntern</span>
              </a>
              <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-white">HOME PAGE</a>
                </nav>
        </div>
      </header>

      <section class="text-gray-500 bg-gray-900 body-font">
        <div class="container px-5 mx-auto">
          <div class="flex flex-wrap justify-evenly -mx-4 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg p-4 hover:opacity-75 overflow-hidden">
                <img alt="content" class="object-cover object-center w-full" src="../images/student-login.png">
              </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">STUDENT LOGIN</h2>
              <a href="../dist/student-login.php"><button class="flex mx-auto mt-6 text-white bg-teal-500 border-0 py-2 px-5 focus:outline-none hover:bg-teal-600 rounded">Continue</button>              </a>
            </div>
            <div class="sm:w-1/2 mb-10 px-4">
              <div class="rounded-lg hover:opacity-75 p-4 overflow-hidden">
                <img alt="content" class="object-cover object-center w-full" src="../images/admin-login.png">
              </div>
              <h2 class="title-font text-2xl font-medium text-white mt-6 mb-3">ADMIN LOGIN</h2>
              <a href="../dist/admin-login.php"><button class="flex mx-auto mt-6 text-white bg-teal-500 border-0 py-2 px-5 focus:outline-none hover:bg-teal-600 rounded">Continue</button>              </a>
            </div>
          </div>
        </div>
      </section>
      <?php
         include("../includes/footer.php");
      ?>
</body>
</html>