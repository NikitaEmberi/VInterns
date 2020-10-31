<?php
  require("../includes/common.php");

  $rollNo=$_SESSION['rollNo'];

  $query="SELECT num_of_courses from students where rollNo='$rollNo'";
  $result=mysqli_query($con,$query) or die($mysqli_error($con));
  $row=mysqli_fetch_array($result);
  $c=$row["num_of_courses"];

  function GetImageExtension($imagetype){
    if(empty($imagetype)) return false;
    switch($imagetype){
        case 'image/bmp' : return '.bmp';
        case 'image/gif' : return '.gif';
        case 'image/jpg' : return '.jpg';
        case 'image/jpeg': return '.jpeg';
        case 'image/png' : return '.png';
        // case 'image/pdf' : return '.pdf';
        default: return false;
    }
}


  $link=$_POST['link'];
  $link=mysqli_real_escape_string($con,$link);

  $skills_learnt=$_POST['skills_learnt'];

  for($i=0;$i<$c;$i++){
    $organization=$_POST['organization'][$i];
    $organization=mysqli_real_escape_string($con,$organization);

    $course_name=$_POST['course_name'][$i];
    $course_name=mysqli_real_escape_string($con,$course_name);

    $uploadedimage=$_FILES['uploadedimage']['name'][$i];

    $condition=0;
    $condition1=0;

      
    if(!empty($_FILES["uploadedimage"]["name"])){
      $file_name=$_FILES["uploadedimage"]["name"][$i];
      $tmp_name=$_FILES["uploadedimage"]["tmp_name"][$i];
      $imgtype=$_FILES["uploadedimage"]["type"][$i];
      $ext=GetImageExtension($imgtype);
      $imagename=date("d-m-y")."-".time().$ext;
      $target_path="../images/".$imagename;
      if(move_uploaded_file($tmp_name,$target_path)){
          if($ext==false){ 
              echo "<script>alert('Please upload a valid file type')</script>";
              echo "(<script>location.href='resume.php'</script>)";
          }else{
             $query1="INSERT INTO courses_taken(course_name,organization,certificate,student_id) values ('$course_name','$organization','$imagename','$rollNo')";
               if(mysqli_query($con,$query1)){
                   $condition=1;
               }
            }
      }
  }
}

$c2=count($_POST['skills_learnt']);
$query2="INSERT INTO project_links(link,student_id) values ('$link','$rollNo')";
for($i=0;$i<$c2;$i++){
    $query3="INSERT INTO skills_learnt(skills,student_id) values ('$skills_learnt[$i]','$rollNo')";
    if(mysqli_query($con,$query3)){
        $condition1=1;
    }
}

if($condition==1 && mysqli_query($con,$query2) && $condition1==1){
    header('location: student-side-resume.php'); 
}else{
    echo "<script>alert('Something went wrong! Please try again later!')</script>";
    echo "(<script>location.href='resume.php'</script>)";
  }
?>