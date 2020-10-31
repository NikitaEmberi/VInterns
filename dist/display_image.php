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
    <title>VIntern</title>
</head>
<body class = "bg-gray-900">
<header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
        </div>
</header>      

   <?php 
      $image=$_GET['image'];
   ?>
  <section class="text-gray-500 bg-gray-900 body-font" style="margin-left:auto">
  <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
        <div class="container px-10 py-20 mx-auto">
          <div class="flex flex-col text-center w-full mb-5">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 mb-4 text-white">CERTIFICATE</h1>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2  w-full">
                    <div class="flex justify-center">
                        <img src="../images/<?php echo $image ?>" alt="certificate">
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</section>
<?php 
      include("../includes/footer.php");
    ?>
</body>
</html>