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
<body>

<header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
        <nav class="md:ml-auto md:mr-auto flex  flex-wrap items-center text-base justify-center">            
            <a href="/dist/internship-details.php" class="mr-5 hover:text-white">Internship details</a>
        </nav>
        </div>
      </header>      
    
    
    <form action="internship-details_submit.php" METHOD="POST" enctype="multipart/form-data">
      <?php
         $i=0;
         $rollNo=$_SESSION['rollNo'];
         $query="SELECT num_of_internships from students where rollNo='$rollNo'";
         $result=mysqli_query($con,$query) or die($mysqli_error($con));
         $row=mysqli_fetch_array($result);
         $c=$row["num_of_internships"];
         if($c>0){
         while($c){
             $i++;
             echo "<section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
             <div class='container px-20 py-24 mx-auto'>
                 <div class='flex flex-col'>
                     <h1 class='text-center w-full sm:text-3xl text-2xl font-medium title-font mb-4 pt-6 text-white'>INTERNSHIP DETAILS FOR INTERNSHIP $i</h1>
                 </div>
                 <div>
                         <div class='w-full text-center my-6'>
                             <p class='mx-auto leading-relaxed text-base'>NAME OF THE ORGANIZATION</p>
                         </div>
                     <div class='my-8'>
                         <div class='py-8 flex  justify-around md:flex-no-wrap'>
                         <div class='justify-around md:flex-grow'>
                             <p class='leading-relaxed'><input required class='w-full  bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-1' placeholder='' type='text' name='organization[]'></p>
                         </div>
                         </div>
                     </div>
                 </div>
                 <div class='pt-12 flex justify-around'>
                 <div>
                     <div class='my-6'>
                         <p class='mx-auto leading-relaxed text-base'>START DATE</p>
                     </div>
                 <div class='w-full -my-8'>
                     <div class='py-8 flex flex-wrap md:flex-no-wrap'>
                     <div class='md:flex-grow'>
                         <p class='leading-relaxed'><input required class='w-6/6 bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-1' placeholder='' type='date' name='start[]'></p>
                     </div>
                     </div>
                 </div>
                 </div>
                 <div>
                     <div class='w-full my-6'>
                         <p class='mx-auto leading-relaxed text-base'>END DATE</p>
                     </div>
                 <div class='-my-8'>
                     <div class='py-8 flex flex-wrap md:flex-no-wrap'>
                     <div class='md:flex-grow'>
                         <p class='leading-relaxed'><input required type='date' class='w-6/6 bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-1' placeholder='' name='end[]'></p>
                     </div>
                     </div>
                 </div>
                 </div>
                 </div>
     
                 <div class='flex justify-center p-12 m-4'>
                     <div>
                         <p class='p-8 leading-relaxed text-base'>LETTER OF COMPLETION</p>
                     </div>
                         <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                             <input type='file' required class='flex-shrink-0 text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0' name='uploadedimage[]' id='uploadedimage'>
                         </div>
                 </div>
     
                 <div class='flex justify-center p-12 m-4'>
                     <div>
                         <p class='p-8 leading-relaxed text-base'>SELECT THE YEAR IN WHICH YOU HAVE DONE THE INTERNSHIP</p>
                     </div>
                         <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                         <select name='choose[]' required class='flex-shrink-0 text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0'>
                            <option name='option'>FE</option>
                            <option name='option'>SE</option>
                            <option name='option'>TE</option>
                         </select>
                         </div>
                 </div>
     
     
                 <div class='py-6'>
                     <div class='w-full text-center my-6'>
                         <p class='mx-auto leading-relaxed text-base'>Description</p>
                     </div>
     
                 <div class='-my-8'>
                     <div class='py-8 flex flex-wrap md:flex-no-wrap'>
                     <div class='md:flex-grow'>
                         <p class='leading-relaxed'><input required name='description[]' class='w-full bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-teal-500 text-base px-4 py-4' placeholder='' type='text'></p>
                     </div>
                     </div>
                 </div>
                 </div>
                 
                 <div class='flex justify-center p-12 m-4'>
                 <div>
                     <p class='p-8 leading-relaxed text-base'>YOUR POSITION IN THE INTERNSHIP</p>
                 </div>
                     <div class='flex justify-center flex-col sm:flex-row sm:items-center items-start'>
                     <select name='choose1[]' required class='flex-shrink text-white bg-teal-500 border-0 py-2 px-8 focus:outline-none hover:bg-teal-600 rounded text-lg mt-10 sm:mt-0'>
                        <option name='option'>PYTHON developer</option>
                        <option name='option'>java developer</option>
                        <option name='option'>graphic designer</option>
                        <option name='option'>full-stack developer</option>
                        <option name='option'>app development</option>
                        <option name='option'>data science and algorithms</option>
                        <option name='option'>scilab and mathematics</option>
                        <option name='option'>front end web developer</option>
                        <option name='option'>back end developer</option>
                     </select>
                     </div>
             </div>
 
             </div>
           </section><hr>";
             $c--;
         }
         echo "<section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
         <div class='container px-5 py-20 pt-0 mx-auto'>
             <div class='p-2 pt-6 w-full'>
                 <button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg' type='submit'>Continue</button>
             </div>
         </div>
     </section>";

        }else{
            echo "<section class='text-gray-500 bg-gray-900 body-font overflow-hidden'>
            <div class='container px-5 py-20 mx-auto'>
              <div class='flex flex-col text-center w-full mb-5'>
              <h1 class='sm:text-3xl text-2xl font-medium title-font mt-5 mb-4 text-white'>You have done no internships!</h1>
              <div class='p-2 pt-6 w-full'>
              <button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg' type='submit'><a href='resume.php'>Continue to add courses</a></button>
              </div>
              </div>
            </div><br><br><br><br><br><br><br><br><br><br><br>
        </section>";
        }
      ?>
    </form>

    <?php 
      include("../includes/footer.php");
    ?>
</body>
</html>