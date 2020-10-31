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
    <title>VIntern</title>
</head>
<body>

<header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
        <nav class="md:ml-auto md:mr-auto flex  flex-wrap items-center text-base justify-center">            
            <a href="../dist/skills.php" class="mr-5 hover:text-white">Academic Details</a>
          </nav>
        </div>
      </header>    
        
    <form action="skills_submit.php" METHOD="POST">
      <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
        <div class="container px-10 py-20 mx-auto">
          <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 mb-4 text-white">ACADEMICS</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Enter your CGPA.</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2  w-full">
                    <div class="flex justify-center">
                        <input class=" text-center bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2" placeholder="" type="text" name="cgpa" required>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
        <div class="container px-5 py-20 pt-0 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Achievements</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Enter any three achievements of yours.</p>

            </div>
          <div class="-my-8">
            <div class="py-8 flex flex-wrap md:flex-no-wrap">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="tracking-widest font-medium title-font text-white">Achievements</span>
                <span class="mt-1 text-gray-600 text-sm">01</span>
              </div>
              <div class="md:flex-grow">
                <p class="leading-relaxed"><input name="achievement_01" class=" w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4" placeholder="" type="text"></p>
              </div>
            </div>
            <div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-no-wrap">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="tracking-widest font-medium title-font text-white">Achievements</span>
                <span class="mt-1 text-gray-600 text-sm">02</span>
              </div>
              <div class="md:flex-grow">
                <p class="leading-relaxed"><input name="achievement_02" class=" w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4" placeholder="" type="text"></p>
              </div>
            </div>
            <div class="py-8 flex border-t-2 border-gray-800 flex-wrap md:flex-no-wrap">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="tracking-widest font-medium title-font text-white">Achievements</span>
                <span class="mt-1 text-gray-600 text-sm">03</span>
              </div>
              <div class="md:flex-grow">
                <p class="leading-relaxed"><input name="achievement_03" class=" w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4" placeholder="" type="text"></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
        <div class="container px-5 py-20 pt-0 mx-auto">
          <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">INTERNSHIPS</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ENTER NUMBER OF INTERNSHIPS YOU HAVE DONE IN THE PAST</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-full">
                    <div class="flex justify-center">
                        <input class=" text-center bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2" placeholder="" type="number" name="num_of_internships" required>
                    </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">COURSES</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">ENTER NUMBER OF COURSES YOU HAVE DONE IN THE PAST</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-full">
                    <div class="flex justify-center">
                        <input class=" text-center bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2" placeholder="" type="number" name="num_of_courses" required>
                    </div>
              </div>
            </div>
          </div>
          <div class="p-2 pt-6 w-full">
            <button class="flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg" type="submit">Continue</button>
          </div>
        </div>
      </section>
    </form>

    <?php
   include("../includes/footer.php");
   ?>

    </body>
</html>