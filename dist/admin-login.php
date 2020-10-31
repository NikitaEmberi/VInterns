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

  <form action="admin-login_script.php" METHOD="POST">
  <section class="text-gray-500 bg-gray-900 body-font py-24" style="margin-left:auto">
    <div class="container px-5 py-24">
      <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col justify-self-center md:ml-auto w-full mt-10 mr-64 md:mt-0" style="justify-content:center">
        <h2 class="text-white text-lg font-medium title-font mb-5">LOGIN</h2>
        <input name="username" class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-teal-500 text-base px-4 py-2 mb-4" placeholder="User Name" type="text">
        <input id="typepass" name="password" class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-teal-500 text-base px-4 py-2 mb-4" placeholder="Password" type="password">
        <input type="checkbox" id="checkbox" onclick="Toggle()" class="text-white border-gray-900 focus:outline-none"><label>Show Password</label>
        <br>
        <button class="text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg">LOGIN</button>
      </div>
  </section>
  </div>
</form>
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