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
<header class="fixed top-0 w-full text-gray-500 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
            <a href="index.php" class="flex title-font font-medium items-center text-white mr-auto mb-4 md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
              <a href="index.php"><button class='flex mx-auto md:ml-auto text-white bg-teal-500 border-0   px-2  py-2 ocus:outline-none hover:bg-teal-600 rounded text-lg'>
              <i class="fa fa-sign-out"> Logout</i></button></a>

        </div>
  </header>      

  <?php
     $rollNo=$_GET['rollNo'];
     $query="SELECT concat(fname,' ',lname) as Name,branch,division,year,email,gender,contact,x_percent,xii_percent,cgpa from students where rollNo='$rollNo'";
     $result=mysqli_query($con,$query) or die(mysqli_error($con));
     $row = mysqli_fetch_array($result);
   ?>

  <section class="text-gray-500 bg-gray-900 body-font justify-center py-24" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">STUDENT'S RESUME</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <table class="table-auto ml-10 justify-center">
            <tbody>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white ">Name : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4  text-white "><?php echo $row['Name']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">Branch : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4    text-white "><?php echo $row['branch']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">Division : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4   text-white "><?php echo $row['division']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">Year : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4    text-white "><?php echo $row['year']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4    text-white ">Email : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4   text-white "><?php echo $row['email']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4    text-white ">Gender : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4   text-white "><?php echo $row['gender']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4    text-white ">Contact : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4  text-white "><?php echo $row['contact']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">X percentage : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4   text-white "><?php echo $row['x_percent']?></td>
            </tr>
            <tr>
                <th class="text-lg  sm:mt-0 px-4  text-white ">XII percentage : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg  sm:mt-0 px-4   text-white "><?php echo $row['xii_percent']?></td>
            </tr>
            <tr>
                <th class="text-lg  sm:mt-0 px-4    text-white ">CGPA : </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg  sm:mt-0 px-4   text-white "><?php echo $row['cgpa']?></td>
            </tr>
            </tbody>
            </table>
        </div>
  </section>
  <br><br>
  <hr>

  <?php
       $rollNo=$_GET['rollNo'];
       $query="SELECT * from skills where student_id='$rollNo'";
       $result=mysqli_query($con,$query) or die(mysqli_error($con));
       $row = mysqli_fetch_array($result);  
  ?>
  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">ACHIEVEMENTS OF THE STUDENT :</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <table class="table-auto ml-10 justify-center">
            <tbody>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white ">ACHIEVEMNT 01  </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4  text-white "><?php echo $row['Achievement_01']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">ACHIEVEMENT 02  </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4    text-white "><?php echo $row['Achievement_02']?></td>
            </tr>
            <tr>
                <th class="text-lg mt-1 sm:mt-0 px-4   text-white ">ACHIEVEMNT 03  </th>
                <th class="text-lg mt-1 sm:mt-0 px-4  text-white "> : </th>
                <td class="text-lg mt-1 sm:mt-0 px-4   text-white "><?php echo $row['Achievement_03']?></td>
            </tr>
            </tbody>
            </table>
        </div>
  </section>
  <br><br>
  <hr>

  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">INTERNSHIP DETAILS :</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <?php 
            $i=0;
            $query1="SELECT * from internships where student_id='$rollNo'";
            $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
            $num1=mysqli_num_rows($result1);
            if($num1>0){
        ?>
        <table class="table-auto ml-10 justify-center">
            <thead>
            <tr>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Sr. No</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Organization</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Description</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Start Date</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">End Date</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Year</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">letter</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Position</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($row1 = mysqli_fetch_array($result1)){
                        $i++;
                ?>
                <tr>
                <td class="border px-4 py-2"><?php echo $i ?></td>
                    <td class="border px-4 py-2"><?php echo $row1['organization'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row1['description'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row1['start'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row1['end'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row1['year'] ?></td>
                    <td class="border px-4 py-2"><a class="text-teal-500" href="display_image.php?image=<?php echo $row1['letter']?>"><?php echo $row1['letter'] ?></a></td>
                    <td class="border px-4 py-2"><?php echo $row1['skills_learnt'] ?></td>
                </tr>
            </tbody>
            <?php } 
            }
            ?>
        </table>
        </div>
  </section>
  <br>
  <hr>
  <br>

  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">COURSES DETAILS :</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <?php 
            $i=0;
            $query2="SELECT * from courses_taken where student_id='$rollNo'";
            $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
            $num2=mysqli_num_rows($result2);
            if($num2>0){
        ?>
        <table class="table-auto ml-10 justify-center">
            <thead>
            <tr>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Sr. No</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Course Name</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Organization</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Certificate</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($row2 = mysqli_fetch_array($result2)){
                        $i++;
                ?>
                <tr>
                <td class="border px-4 py-2"><?php echo $i ?></td>
                    <td class="border px-4 py-2"><?php echo $row2['course_name'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row2['organization'] ?></td>
                    <td class="border px-4 py-2"><a class="text-teal-500" href="display_image.php?image=<?php echo $row2['certificate'] ?>" ><?php echo $row2['certificate'] ?></a>
                </tr>
            </tbody>
            <?php } 
            }
            ?>
        </table>
        </div>
  </section>
  <br>
  <hr>
  <br>

  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">MAJOR SKILLS :</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <?php 
            $i=0;
            $query3="SELECT * from skills_learnt where student_id='$rollNo'";
            $result3=mysqli_query($con,$query3) or die(mysqli_error($con));
            $num3=mysqli_num_rows($result3);
            if($num3>0){
        ?>
        <table class="table-auto ml-10 justify-center">
            <thead>
            <tr>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Sr. No</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600"> Skills </th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($row3 = mysqli_fetch_array($result3)){
                        $i++;
                ?>
                <tr>
                <td class="border px-4 py-2"><?php echo $i ?></td>
                    <td class="border px-4 py-2"><?php echo $row3['skills'] ?></td>
                </tr>
            </tbody>
            <?php } 
            }
            ?>
        </table>
        </div>
  </section>
  <br>
  <hr>
  <br>

  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 text-white">PROJECT LINKS :</h1>
            </div>
        </div> 
        <div class="container px-5 py-0 mx-auto flex justify-center p-12">
        <?php 
            $i=0;
            $query4="SELECT * from project_links where student_id='$rollNo'";
            $result4=mysqli_query($con,$query4) or die(mysqli_error($con));
            $num4=mysqli_num_rows($result4);
            if($num4>0){
        ?>
        <table class="table-auto ml-10 justify-center">
            <thead>
            <tr>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Sr. No</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600"> Links </th>
            </tr>
            </thead>
            <tbody>
                <?php
                    while($row4 = mysqli_fetch_array($result4)){
                        $i++;
                ?>
                <tr>
                <td class="border px-4 py-2"><?php echo $i ?></td>
                <td class="border px-4 py-2"><a target="_blank" class="text-teal-500" href="<?php echo $row4['link'] ?>"><?php echo $row4['link'] ?></a></td>
                </tr>
            </tbody>
            <?php } 
            }
            ?>
        </table>
        </div>
  </section>
  <br>
  <br>
  <?php
      include("../includes/footer.php");
  ?>
</body>
</html>