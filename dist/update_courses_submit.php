<?php
   require("../includes/common.php");

   $id=$_GET['id'];

   $rollNo=$_SESSION['rollNo'];

   $query21="UPDATE students set updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";
 

   $organization=$_POST['organization'];
   $organization=mysqli_real_escape_string($con,$organization);

   $course_name=$_POST['course_name'];
   $course_name=mysqli_real_escape_string($con,$course_name);


   function GetImageExtension($imagetype){
    if(empty($imagetype)) return false;
    switch($imagetype){
        case 'image/bmp' : return '.bmp';
        case 'image/gif' : return '.gif';
        case 'image/jpeg' : return '.jpg';
        case 'image/png' : return '.png';
        default: return false;
    }
}

if(!empty($_FILES["uploadedimage"]["name"])){
    $file_name=$_FILES["uploadedimage"]["name"];
    $tmp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext=GetImageExtension($imgtype);
    $imagename=date("d-m-y")."-".time().$ext;
    $target_path="../images/".$imagename;
    if(move_uploaded_file($tmp_name,$target_path)){
        if($ext==false){ 
            echo "<script>alert('Not a valid file type!')</script>";
        }else{
            $query1="UPDATE courses_taken set organization='$organization',course_name='$course_name',
            certificate='$imagename' where id='$id'";
            if(mysqli_query($con,$query1) && mysqli_query($con,$query21)){
                header('location: student-side-resume.php'); 
            }else{
                echo "<script>alert('Something went wrong! Please try again later')</script>";
                echo "(<script>location.href='update-internships.php?id=$id'</script>)";              
            }
        }
    }
}
?>
