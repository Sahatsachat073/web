<?php 
require_once( "../inc/db_connect.php" );
$mysqli = connect();


?>

<?php 
 $types=$_POST['types'];
 $score = $_POST['score']; 
//  $uploadfile = $_POST['certificates'];    
 $dates = $_POST['dates'];  
 $term = $_POST['term'];
 $years =$_POST['years'];
 $result =$_POST['result'];
// if ($_FILES['certificates']['name']) {
//   $sql ="UPDATE info_result_language_exam SET 
//   types='$types',
//   score ='$score',
  
//   dates ='$dates',
//   term ='$term',
//   years='$years',
//   result='$result',
//   WHERE id = '".$_POST["id"]."'";
// }
$post_new_file=$_FILES['certificates'];
if(isset($_POST['update'])){
if (!empty($post_new_file)) {                
                    
  $post_file=$_FILES['certificates']['name'];
  $post_file_temp=$_FILES['certificates']['tmp_name'];
  move_uploaded_file($post_file_temp,"../pdf/$post_file");                     
                     }




 
$sql ="UPDATE info_result_language_exam SET 
  types='$types',
  score ='$score',
  certificates='{$post_file}'
  dates ='$dates',
  term ='$term',
  years='$years',
  result='$result',
  WHERE id = '".$_POST["id"]."'";
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
}?>