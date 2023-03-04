<?php 
require_once("../inc/db_connect.php");
$mysqli = connect();


?>

<?php 
 $types=$_POST['types'];
 $score = $_POST['score']; 
 $Certificates = $_FILES['certificates']['name'];    
 $dates = $_POST['dates'];  
 $term = $_POST['term'];
 $years =$_POST['years'];
 $result =$_POST['result'];

  

  

//   $uploadOk = 1;
//   $imageFileType = strtolower(pathinfo($uploadfiles,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["certificates"]["name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
    
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($uploadfiles)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["certificates"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\n";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["certificates"]["tmp_name"], $uploadfiles)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["certificates"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }




  //if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
//	{
//		echo "Update file to Complete<br>";
//		$objConnect = mysql_connect("localhost","root","password") or die("Error Connect to Database");
//		$objDB = mysql_select_db("test");
//		$strSQL = "UPDATE files";
//		$strSQL .="SET 'FilesName' = '".$_FILES["fileUpload"]["name"]."' WHERE FilesID = '".$_GET["FilID"]."'";


		
		

//	}
if($_FILES['certificates']['name']!=""){
  echo $newpic=$_FILES['certificates']['name'];
  $oldpic=$_FILES["certificates"];

  if(!empty($newpic)){ //!empty($newpic
  $uppic=$newpic;
  
  }else{
  
  $uppic=$oldpic;// $oldpic
  }
  $uploaddir = 'fileUpload/';
  $uploadfiles =$_FILES['certificates']['name'];
  move_uploaded_file($_FILES['certificates']['tmp_name'], 'fileUpload/'.$uploadfiles);
  $sql =" UPDATE  info_result_language_exam SET 
certificates='$uploadfiles'
 WHERE id = '".$_POST["id"]."' " ;
 $objQuery = $mysqli->query($sql);
 if($objQuery)
 {
 // echo "Save Done.";
 echo '<script>alert("บันทึกการแก้ไขแล้ว");window.location="./language-exam.php";</script>';
 }
 else
 {
 echo "Error Save [".$sql."]";
 }

}
else{
  $sql =" UPDATE  info_result_language_exam SET 
types='$types',
score='$score',
dates='$dates',
 term='$term',
 years='$years',
 result='$result'
 WHERE id = '".$_POST["id"]."' " ;
  echo $sql;
 $objQuery = $mysqli->query($sql);

 if($objQuery)
 {
 // echo "Save Done.";
 echo '<script>window.location="./language-exam.php";</script>';
 }
 else
 {
 echo "Error Save [".$sql."]";
 }

}
    
     


 mysqli_close($mysqli);
?>