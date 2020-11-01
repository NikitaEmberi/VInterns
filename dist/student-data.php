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
    <header class=" text-gray-500 bg-gray-800 body-font">
    <div class="container mx-auto flex flex-wrap px-5 py-6 flex-col md:flex-row items-center">
    <a href="index.php" class="flex title-font font-medium items-center text-white mb-4 mr-auto md:mb-0">
              <img class="logo-img" src="../images/logoresize.png">
                <span class="ml-3 text-xl">vIntern</span>
              </a>
          <nav class="md:ml-auto mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white">ADMIN LOGIN</a>
            </nav>
          <div class="md:ml-auto md:mr-2">
              <a href="sort-students-form.php?branch=<?php echo $_GET['branch'] ?>"><button class='flex mx-auto  text-white bg-teal-500 border-0   px-2  py-2 ocus:outline-none hover:bg-teal-600 rounded text-lg'>
              <i class="fa fa-filter"> Filter </i></button></a>
          </div>
          <a href="branch-select.php"><button class='flex mx-auto  text-white bg-teal-500 border-0   px-2  py-2 ocus:outline-none hover:bg-teal-600 rounded text-lg'>
              <i class="fa fa-sign-out"> BACK</i></button>
          </a>
    </div>
  </header>

   
  <section class="text-gray-500 bg-gray-900 body-font justify-center" style="margin-left:auto">
        <div class='container px-20 py-2 mx-auto'>
            <div class='flex flex-col text-center w-full mb-5'>
            <h1 class="sm:text-3xl text-2xl font-medium title-font mt-5 mb-4 text-white">All the students of Branch : <?php echo $_GET['branch']?></h1>
            </div>
        </div> 
    <div class="container px-5 py-0 flex justify-center p-12 m-4">
        <table class="table-auto ml-10 justify-center">
            <thead>
            <tr>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Sr. No</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Name</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">CGPA</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">UPDATED AT</th>
                <th class="text-lg mt-10 sm:mt-0 px-4  py-2 border text-white bg-teal-500  hover:bg-teal-600">Details</th>
            </tr>
            </thead>
            <tbody>
               <?php
                  $i=0;
                  $branch=$_GET['branch'];
                  $query="select rollNo,concat(fname,' ',lname) as Name,cgpa,updated_at from students where branch='$branch' order by updated_at desc";
                  $result=mysqli_query($con, $query) or die(mysqli_error($con));
                  while ($row = mysqli_fetch_array($result)) {
                      $i++;
                ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $i ?></td>
                    <td class="border px-4 py-2"><?php echo $row['Name'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row['cgpa'] ?></td>
                    <td class="border px-4 py-2"><?php echo $row['updated_at'] ?></td>
                    <td class="border px-4 py-2"><a href="admin-side-resume.php?rollNo=<?php echo $row["rollNo"]?>"><button class='flex mx-auto text-white bg-teal-500 border-0 py-2 p px-8 focus:outline-none hover:bg-teal-600 rounded text-lg'>View</button></a></td>
                </tr>
               <?php } ?>
            </tbody>
        </table>
    </div>
  <!-- </div> -->
  </section>
  <br>  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <?php
         include("../includes/footer.php");
      ?>

</body>
</html>
