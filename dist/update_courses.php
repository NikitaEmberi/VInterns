<?php
   require("../includes/common.php");
   $id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>VInterns</title>
</head>
<body class = "bg-gray-900">
<header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
              <div class="md:ml-auto md:mr-auto">
              <a href="student-side-resume.php"><button class='flex mx-auto  text-white bg-teal-500 border-0   px-2  py-2 ocus:outline-none hover:bg-teal-600 rounded text-lg'>
              <i class="fa fa-arrow-left"> Go back </i></button></a>
              </div>
        </div>
  </header>      

    <!-- <section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
        <div class='container px-20 py-24 mx-auto'>
            <div class='flex flex-col'>
                <h1 class='text-center w-full sm:text-3xl text-2xl font-medium title-font pt-6 text-white'>Students of branch <?php echo $_GET['branch']?></h1>
            </div>
        </div>
    </section> -->
    <?php 
       $id=$_GET['id'];
       $query="SELECT * from courses_taken where id=$id";
       $result=mysqli_query($con,$query) or die(mysqli_error($con));
       $row = mysqli_fetch_array($result);
    ?>

    <form action="update_courses_submit.php?id=<?php echo $id ?>" METHOD="POST" enctype="multipart/form-data">
    <section class='px-24 pt-24 flex flex-wrap justify-around' >
              <div class='w-full text-center my-6 text-white'>
                <h1 class='text-2xl mx-auto leading-relaxed m-5'>EDIT COURSE</h1>
            </div>
              <div class='m-2 w-1/2'>
                <p class='leading-relaxed'><input value=<?php echo $row['course_name'] ?> class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2' placeholder='Name of Course' type='text' name='course_name' required></p>
              </div>
              <div class='m-2 w-1/2'>
                <p class='leading-relaxed '><input value=<?php echo $row['organization'] ?> class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2' placeholder='Name of the organization :' type='text' required name='organization'></p>
              </div>
              
              <div class='flex justify-center p-12 m-4'>
              <div>
                  <p class='text-white p-8 leading-relaxed text-base'>LETTER OF COMPLETION</p>
              </div>
                  <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                      <input type='file' required class='flex-shrink-0 text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0' name='uploadedimage' id='uploadedimage'>
                  </div>
          </div>

    </section>
    <section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
         <div class='container px-5 py-20 pt-0 mx-auto'>
             <div class='p-2 pt-6 w-full'>
                 <button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg' type='submit'>EDIT</button>
             </div>
         </div>
     </section>
    </form>

  <?php 
   include("../includes/footer.php");
  ?>

</body>
</html>

