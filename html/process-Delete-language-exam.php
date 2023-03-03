<?php 
require_once( "../inc/db_connect.php" );
$mysqli = connect();


?>

<?php 
$sql = "DELETE FROM info_result_language_exam WHERE id = '".$_GET["id"]."' " ; 

$objQuery = $mysqli->query($sql);
if($objQuery)
{
// echo "Record Deleted.";
echo '<script>alert("ต้องการลบข้อมูลหรือไม่");window.location="./language-exam.php";</script>';
}
else
{
echo "Error Delete [".$strSQL."]";
}
mysqli_close($mysqli);
?>
