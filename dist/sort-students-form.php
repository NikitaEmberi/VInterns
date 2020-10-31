<?php
   require("../includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <title>Sorted Students</title>
</head>
<body class = "bg-gray-900">
  <header class=" text-gray-500 bg-gray-800 body-font">
    <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
    <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white">Filtered Students</a>
            </nav>
            <a href="branch-select.php"><button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">BACK
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M1 12h14M13 5l7 7-7 7"></path>
            </svg>
          </button></a>
    </div>
  </header>
  <form action="filtered_students.php?branch=<?php echo $_GET['branch']?>" METHOD="POST">
      <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
        <div class="container px-10 py-20 mx-auto">
          <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 mb-4 text-white">SELECT THE CRITERIA</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Enter CGPA.</p>
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
        <div class='flex justify-center p-12 m-4'>
                     <div>
                         <p class='p-8 leading-relaxed text-base'>SELECT THE YEAR : </p>
                     </div>
                         <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                         <select name='choose' required class='flex-shrink-0 text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0'>
                            <option name='option'>FE</option>
                            <option name='option'>SE</option>
                            <option name='option'>TE</option>
                         </select>
                         </div>
                 </div>
      </section>


      <section class="px-24 pt-0">
        <div class="w-full text-center my-6 text-white">
          <h1 class="text-2xl mx-auto leading-relaxed">SKILLS YOU ARE LOOKING FOR :</h1>
      </div>
      <div class="flex flex-wrap justify-evenly md:flex md:items-center  m-6 p-6">
        <div>
          <label class="md:w-2/3 block text-white m-3 text-base font-semibold">
            <input class="leading-tight" type="checkbox" value="PYTHON developer" name="skills_learnt[]" checked>
            <span class="text-sm m-3">
              python 
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 m-3 font-semibold">
            <input class=" leading-tight" type="checkbox" value="graphic designer" name="skills_learnt[]">
            <span class="text-sm m-3">
              Graphic Designing
              </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="full-stack developer" name="skills_learnt[]">
            <span class="text-sm m-3">
              full-stack development
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" value="app development" name="skills_learnt[]" type="checkbox">
            <span class="text-sm m-3">
              app development
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="data science and algorithms" name="skills_learnt[]">
            <span class="text-sm m-3">
              data science and algorithms
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="scilab and mathematics" name="skills_learnt[]">
            <span class="text-sm m-3">
              scilab and mathematics
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="front end web developer" name="skills_learnt[]">
            <span class="text-sm m-3">
              front end web developement
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="back end developer" name="skills_learnt[]">
            <span class="text-sm m-3">
              back end developement
            </span>
          </label>
        </div>
        <div>
          <label class="md:w-2/3 block text-gray-500 font-semibold m-3">
            <input class=" leading-tight" type="checkbox" value="java developer" name="skills_learnt[]">
            <span class="text-sm m-3">
              java development
            </span>
          </label>
        </div>
      </div>

      </section>

      <section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
         <div class='container px-5 py-20 pt-0 mx-auto'>
             <div class='p-2 pt-6 w-full'>
                 <button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg' type='submit'>Filter</button>
             </div>
         </div>
     </section>

    </form>
    <footer class="text-gray-500 bg-gray-800 body-font ">
        <div class="container px-5 py-5 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
            <img class="logo-img" src="../images/logoresize.png">
            <span class="ml-3 text-xl">vIntern</span>
          </a>
          <p class="text-sm text-gray-600 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 vIntern</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://github.com/mohit-cfc/Placement-Internship-Assistance-VIT-Hackathon" class="ml-3 text-gray-600">
              <img src="../images/github-logo.png" alt="github-logo">
            </a>
          </span>
        </div>
      </footer>

</body>
</html>