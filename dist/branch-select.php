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
    <title>Admin-login</title>
</head>
<body class = "bg-gray-900">
<!-- <header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
        </div>
        <div class="md:ml-auto">
              <a href="index.php"><button class='flex mx-auto  text-white bg-teal-500 border-0   px-2  py-2 ocus:outline-none hover:bg-teal-600 rounded text-lg'>
              <i class="fa fa-sign-out"> Logout</i></button></a>
        </div>
  </header>       -->

  <header class=" text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
              <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-white">BRANCH SELECTION</a>
                </nav>
        </div>
      </header>


      <section class="text-gray-500 bg-gray-900 body-font py-24 mt-auto">
        <div class="container px-24  mx-auto">
          <div class="flex flex-wrap -m-4 justify-evenly">
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-800 p-12 rounded-lg overflow-hidden text-center relative">
                  <a href="student-data.php?branch=INFT"><img class="hover:opacity-75 w-full object-contain" src="../images/inftlogo.png"></a>
              </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-800 p-12 rounded-lg overflow-hidden text-center relative">
                <a href="student-data.php?branch=BIOMED"><img class="hover:opacity-75 w-full object-contain" src="../images/biomlogo.png"></a>
              </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-800 p-12 rounded-lg overflow-hidden text-center relative">
                  <a href="student-data.php?branch=CMPN"><img class="hover:opacity-75 w-full object-contain" src="../images/cmpnlogo.png"></a>
              </div>
            </div>    
            <div class="p-4 lg:w-1/3">
              <div class="h-full bg-gray-800 p-12 rounded-lg overflow-hidden text-center relative">
                <a href="student-data.php?branch=EXTC"><img class="hover:opacity-75 w-full object-contain" src="../images/extclogo.png"></a>
            </div>
            </div>
            <div class="p-4 lg:w-1/3">
              <div class="bg-gray-800 p-12 rounded-lg overflow-hidden text-center relative">
                   <a href="student-data.php?branch=ETRX"><img class="hover:opacity-75 w-full object-contain" src="../images/etrxlogo.png"></a> 
            </div>
            </div>
        </div>
        </div>

        </div>
      </section>
      <?php
         include("../includes/footer.php");
      ?>
</body>
</html>