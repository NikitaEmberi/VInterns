<?php
   require("../includes/common.php");

   $rollNo=$_SESSION['rollNo'];

   $query21="UPDATE students set updated_at=CURRENT_TIMESTAMP where rollNo='$rollNo'";
 

   $id=$_GET['id'];

   $organization=$_POST['organization'];
   $organization=mysqli_real_escape_string($con,$organization);

   $start=$_POST['start'];
   $start=mysqli_real_escape_string($con,$start);

   $end=$_POST['end'];
   $end=mysqli_real_escape_string($con,$end);

   $description=$_POST['description'];
   $description=mysqli_real_escape_string($con,$description);

   $year=$_POST['choose'];
   $year=mysqli_real_escape_string($con,$year);

   $skill=$_POST['choose1'];
//    $skill=mysqli_real_escape_string($con,$skill);

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
            $query1="UPDATE internships set organization='$organization',description='$description',start='$start',end='$end',
            letter='$imagename',year='$year',skills_learnt='$skill' where id='$id'";
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
