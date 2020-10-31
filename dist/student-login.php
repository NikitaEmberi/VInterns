<?php
   require("../includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Student-login</title>
</head>
<body class = "bg-gray-900">
  <header class=" text-gray-500 bg-gray-800 body-font">
    <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
    <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white">STUDENT LOGIN</a>
            </nav>
    </div>
  </header>

  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24">
    <form action="login_submit.php" method="POST">
      <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col justify-self-center md:ml-auto w-full mt-10 mr-64 md:mt-0">
        <h2 class="text-white text-lg font-medium title-font mb-5">LOGIN</h2>
          <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-teal-500 text-base px-4 py-2 mb-4" placeholder="User Name" type="text" name="username" required>
          <input id="typepass" class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-teal-500 text-base px-4 py-2 mb-4" placeholder="Password" type="password" name="password" required><br>
          <input type="checkbox" id="checkbox" onclick="Toggle()" class="text-white border-gray-900 focus:outline-none"><label>Show Password</label>
          <br>
          <a href="skills.php"><button type="submit" class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">LOGIN</button></a>
      </div>
    </form>
    </div>
  </section>

<?php 
   include("../includes/footer.php");
?>

<script> 
    // Change the type of input to password or text 
        function Toggle() { 
            var temp = document.getElementById("typepass"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 
        } 
</script> 
</body>
</html>