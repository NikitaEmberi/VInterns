<?php
   require("../includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../dist/style.css">
    <link rel="stylesheet" href="../dist/style.css">
    <title>VIntern</title>
</head>
<body class="bg-gray-900 ">

      <header class="top-0 fixed w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
        <nav class="md:ml-auto md:mr-auto flex  flex-wrap items-center text-base justify-center">            
            <!-- <a href="/dist/skills.html" class="mr-5 hover:text-white">Academic Details</a>
            <a href="/dist/internship-details.html" class="mr-5 hover:text-white">Internship details</a> -->
            <a href="../dist/resume.php" class="mr-5 hover:text-white">Courses and Skills</a>
          </nav>
          <!-- <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">UPDATE
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M1 12h14M13 5l7 7-7 7"></path>
            </svg>
          </button> -->
        </div>
      </header>

      <form action="resume_submit.php" METHOD="POST" enctype="multipart/form-data">
      <?php
          $i=0;
          $rollNo=$_SESSION['rollNo'];
          $query="SELECT num_of_courses from students where rollNo='$rollNo'";
          $result=mysqli_query($con,$query) or die($mysqli_error($con));
          $row=mysqli_fetch_array($result);
          $c=$row["num_of_courses"];
          // if($c>0){
          while($c>0){
              $i++;
              echo "<section class='px-24 pt-24 flex flex-wrap justify-around' >
              <div class='w-full text-center my-6 text-white'>
                <h1 class='text-2xl mx-auto leading-relaxed m-5'>INFORMATION OF COURSE $i</h1>
            </div>
              <div class='m-2 w-1/2'>
                <p class='leading-relaxed'><input class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2' placeholder='Name of Course' type='text' name='course_name[]' required></p>
              </div>
              <div class='m-2 w-1/2'>
                <p class='leading-relaxed '><input class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2' placeholder='Name of the organization :' type='text' required name='organization[]'></p>
              </div>
              
              <div class='flex justify-center p-12 m-4'>
              <div>
                  <p class='text-white p-8 leading-relaxed text-base'>LETTER OF COMPLETION</p>
              </div>
                  <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                      <input type='file' required class='flex-shrink-0 text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0' name='uploadedimage[]' id='uploadedimage'>
                  </div>
          </div>

    </section>
            <hr>
            ";
            $c--;
          }
      ?>
          
      <section class="px-24 pt-24">
        <div class="w-full text-center my-6 text-white">
          <h1 class="text-2xl mx-auto leading-relaxed">YOU ARE GOOD AT :</h1>
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

      <section class='px-24 pt-5 pb-5 flex flex-wrap justify-around' >
              <div class='w-full text-center my-6 text-white'>
                <h1 class='text-2xl mx-auto leading-relaxed m-1'>LINK OF THE BEST PROJECT YOU HAVE DONE SO FAR: </h1>
            </div>
              <div class='m-2 w-1/2'>
                <p class='leading-relaxed'><input name="link" pattern="https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,}" class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-2' placeholder='link:https://' type='text'></p>
              </div>
              
        <!-- <div class="px-1">
          <img src="../images/addlogo.png">
        </div> -->

    </section>
    <section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
         <div class='container px-5 py-20 pt-0 mx-auto'>
             <div class='p-2 pt-6 w-full'>
                 <button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg' type='submit'>Continue</button>
             </div>
         </div>
     </section>
</form>

<!-- <section class="px-24">

  <div class="w-full text-center my-6 text-white">
    <p class=" mx-auto leading-relaxed text-2xl">UPLOAD YOUR RESUME</p>
</div>

  <div class="flex w-full items-center justify-center p-5 text-gray-500 body-font">
    <label class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">
        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="m-2 ml-4 text-base leading-normal">Select a file</span>
        <input type='file' class="hidden" />
    </label>
</div>
</section>       -->

<?php 
      include("../includes/footer.php");
    ?>

</body>
</html>