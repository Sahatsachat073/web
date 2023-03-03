<?php 
require_once( "../inc/db_connect.php" );
$mysqli = connect();


?>

<?php 
 $types=$_POST['types'];
 $score = $_POST['score']; 
//  $Certificates = $_POST['certificates'];    
 $dates = $_POST['dates'];  
 $term = $_POST['term'];
 $years =$_POST['years'];
 $result =$_POST['result'];

 $uploaddir = 'fileUpload/';
$uploadfile = $uploaddir . basename($_FILES['certificates']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['certificates']['tmp_name'], $uploadfile)) {
    //echo "File is valid, and was successfully uploaded.\n";
} else {
   // echo "Possible file upload attack!\n";
}

//echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

 
$sql ="INSERT INTO info_result_language_exam (types,score,certificates,dates,
 term,years,result) VALUES ('$types','$score','$uploadfile','$dates','$term','$years','$result')";
 echo $sql;
//  $rs = $mysqli->query( $sql );
if ($mysqli->query($sql)) {
  // echo "seccess";
  echo '<script>alert("บันทึกการเพิ่มข้อมูลแล้ว");window.location="./language-exam-Add.php";</script>';
}
else {
  echo "error";
  echo '<script>alert("พบข้อผิดพลาด!!")</script>';
}
