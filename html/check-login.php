<?php
session_start();
date_default_timezone_set( "Asia/Bangkok" );
require_once( "../inc/db_connect.php" );
require_once( "../lib/nusoap.php" );
ini_set('default_charset', 'UTF-8');
$mysqli = connect();
$user = $_POST[ 'user' ];
$user = strtolower( $user ); //แปลงเป็นตัวพิมพ์เล็กทั้งหมด
$pass = sha1( $_POST[ 'pass' ] ); //เข้ารหัสผ่านด้วย sha1
// เช็คว่า user ที่เข้ามาเป็นสถานะ อะไร
$user = $mysqli->real_escape_string( $user );
$pass = $mysqli->real_escape_string( $pass );
$user;
// error_reporting(0);


if (isset( $user ) ) {

  $user_number = strlen($user);
  if($user_number>10){
	  $status=1; //นิสิต
  }else{
	  $status=2; //อาจารย์
  }
  //echo $status;
  if (is_numeric($user) and $status==2){

    //อาจารย์
    $client = new SoapClient( "http://regpr.msu.ac.th/webservice/WsOfficerlogin.php?wsdl" );
    $params = array(
      'officercode' => $_POST[ 'user' ], 'out_password' => $_POST[ 'pass' ]
    );
    $data = $client->__soapCall( "Officerlogin", $params );
    $mydata = json_decode( $data, true ); // json decode from web service
    if ( count( $mydata ) == 0 ) {
       echo "0111";
    } else {
      ?>
<?php
foreach ( $mydata as $result ) {

  if ( $result[ "xpass" ] == 1 ) {
        //echo "---in---";

    $_SESSION[ 'SES_EN_REG_ID' ] = session_id();
    $_SESSION[ 'SES_EN_REG_USER' ] = $prefixname . $officername . " " . $officersurname;
    $_SESSION[ 'SES_EN_REG_FAC_ID' ] = $facultyid;
    echo 2;//เข้าระบบสถานะอาจารย์
  } elseif ( $result[ "xpass" ] == 0 ) {
    echo "02222";
  }

  }
 }
} if(is_numeric($user) and $status==1){
	    $client = new SoapClient( "http://regpr.msu.ac.th/webservice/WsStudentlogin.php?wsdl");
  $params = array(
    'studentcode' => $user, 'out_password' => $_POST[ 'pass' ]
  );
  $data = $client->__soapCall( 'Studentlogin', $params );

  $mydata = json_decode( $data, true ); // json decode from web service


  if ( count( $mydata ) == 0 ) {
     echo "03333";
  } else {
    ?>
<?php
foreach ( $mydata as $result ) {

  if ( $result[ "xpass" ] == 1 ) {
             //check user student เคย เพิ่มเข้าไปในระบบ Status หรือไม่
             $sql_std = " select STUDENTCODE from info_student WHERE STUDENTCODE=" . $_POST['user'];
             $rs_std = $mysqli->query($sql_std);
             $rs_num_std = $rs_std->num_rows;
             //ดึงข้อมูล Service Student
             $client = new SoapClient("http://regpr.msu.ac.th/webservice/WsStudentinformation.php?wsdl");
             $params = array(
               'studentcode' => $user //$_GET['stdcode']
             );
             $data = $client->__soapCall("Studentinformation", $params);
             $data;
             $mydata = json_decode($data, true); // json decode from web service
             if (count($mydata) == 0) {
               echo 3;
             } else {
               foreach ($mydata as $result) {
                 $STUDENTCODE = $result["STUDENTCODE"];
                 $CITIZENID = $result["CITIZENID"];
               }
             }
             //echo $CITIZENID;
            // echo $STUDENTCODE." ".$SumOfAMOUNT." ".$STATUSPAYMENT;
                  // ======== check ว่าเคย insert  table info_student หรือไม่ ================
                    $sql_chk = " select STUDENTCODE FROM  info_student WHERE  STUDENTCODE=" . $STUDENTCODE;
                   $rs_chk = $mysqli->query($sql_chk);
                   $rs_num_std = $rs_chk->num_rows;
                   if ($CITIZENID != "") { //ถ้ามีเลขบัตรให้มีการไปค้นจาก service student status
                    // echo "IN";
                     $url_m = "http://regpr.msu.ac.th/webservice/JsonStudentMasterPaymentAndRegistWhitCitizenid.php?citizenid=".$CITIZENID;
                     $contents = file_get_contents($url_m);
                    // $contents = utf8_encode($contents);
                     $results = json_decode($contents);
                     foreach ($results as $key => $value) { 
                      foreach ($value as $k => $v) { 
                          //echo "$k | $v <br />"; 
                          if($k=='STUDENTCODE'){
                            $STUDENTCODE = $v;
                          }
                          if($k=='CITIZENID'){
                            $CITIZENID = $v;
                          }
                          if($k=='ADMITACADYEAR'){
                            $ADMITACADYEAR = $v;
                          }
                          if($k=='ADMITSEMESTER'){
                            $ADMITSEMESTER = $v;
                          }
                          if($k=='prefixname'){
                            $PREFIXNAME = $v;
                          }
                          if($k=='STUDENTNAME'){
                            $STUDENTNAME = $v;
                          }
                          if($k=='STUDENTSURNAME'){
                            $STUDENTSURNAME = $v;
                          }
                          if($k=='FACULTYNAME'){
                            $FACULTYNAME = $v;
                          }
                          if($k=='CAMPUSNAME'){
                            $CAMPUSNAME = $v;
                          }
                          if($k=='PROGRAMNAME'){
                            $PROGRAMNAME = $v;
                          }
                          if($k=='LEVELID'){
                            $LEVELID = $v;
                          }
                          if($k=='SUMOFAMOUNT'){
                            $SumOfAMOUNT = $v;
                          }
                          if($k=='SUMOFBALANCE'){
                            $SumOfBALANCE = $v;
                          }
                          if($k == 'STATUSREGIST'){
                            $STATUSREGIST = $v;
                          }
                          if($k=='STATUSPAYMENT'){
                            $STATUSPAYMENT = $v;
                          }
                          if($k=='NATIONID'){
                            $NATIONID = $v;
                          }
                          if($k=='NATIONNAME'){
                            $NATIONNAMETH = $v;
                          }
                          if($k=='NATIONNAMEENG'){
                            $NATIONNAMEENG = $v;
                          }
                          if($k=='CURRENTPHONENO'){
                            $STUDENTMOBLIE = $v;
                          }
                      }
                     }
                   }
                   if ($rs_num_std == 0) { //ยังไม่เพิ่มในตาราง
                    // echo "00000000000";
                     $sqlin = "INSERT INTO info_student(stu_id,ADMITACADYEAR,ADMITSEMESTER,STUDENTCODE,PREFIXNAME,STUDENTNAME,STUDENTSURNAME,CITIZENID,FACULTYNAME,CAMPUSNAME,PROGRAMNAME,LEVELID,SumOfAMOUNT,SumOfBALANCE,STATUSPAYMENT,STATUSREGIST,NATIONID,NATIONNAMETH,NATIONNAMEENG,STUDENTMOBLIE) VALUES (NULL,'$ADMITACADYEAR','$ADMITSEMESTER','$STUDENTCODE','$PREFIXNAME','$STUDENTNAME','$STUDENTSURNAME','$CITIZENID','$FACULTYNAME','$CAMPUSNAME','$PROGRAMNAME','$LEVELID','$SumOfAMOUNT','$SumOfBALANCE','$STATUSPAYMENT','$STATUSREGIST','$NATIONID','$NATIONNAMETH','$NATIONNAMEENG','$STUDENTMOBLIE')";
                     $rsin = $mysqli->query($sqlin);
                     $_SESSION['SES_EN_REG_USER'] 	= $user;
                   //  echo 1;
                   } else {
                     //echo "10000000001";
                     $sqlup = "UPDATE info_student SET ADMITACADYEAR='$ADMITACADYEAR',ADMITSEMESTER='$ADMITSEMESTER',STUDENTCODE='$STUDENTCODE' ";
                     $sqlup .= ",PREFIXNAME='$PREFIXNAME',STUDENTNAME='$STUDENTNAME',STUDENTSURNAME='$STUDENTSURNAME',CITIZENID='$CITIZENID'  ";
                     $sqlup .= ",FACULTYNAME='$FACULTYNAME',CAMPUSNAME='$CAMPUSNAME',PROGRAMNAME='$PROGRAMNAME',LEVELID='$LEVELID'  ";
                     $sqlup .= ",SumOfAMOUNT='$SumOfAMOUNT',SumOfBALANCE='$SumOfBALANCE',STATUSPAYMENT='$STATUSPAYMENT',STATUSREGIST='$STATUSREGIST'  ";
                     $sqlup .= ",NATIONID='$NATIONID',NATIONNAMETH='$NATIONNAMETH',NATIONNAMEENG='$NATIONNAMEENG',STUDENTMOBLIE='$STUDENTMOBLIE'  ";
                     $sqlup .= " WHERE STUDENTCODE=".$user;
                      $rsup = $mysqli->query($sqlup);
                      $_SESSION['SES_EN_REG_USER'] 	= $user;
                    //  echo 1;
                      //echo $sqlup;
                   }
    echo 1; // เข้าระบบได้เป็นสถานะ นิสิต
  } else {
    echo "04444";
  }
}
}
} if(is_string($user) and $status=""){
  		$sql_chk_sf = "select staff_username,staff_pass,staff_faculty_id FROM  request_staff_faculty WHERE  staff_username='$user'";
		$rs_chk_sf = $mysqli->query($sql_chk_sf);
		$row_chk_sf =$rs_chk_sf->fetch_array();
		$pass_t_sf = $row_chk_sf['staff_pass'];
		$staff_faculty_id = $row_chk_sf['staff_faculty_id'];
	 	$num_chk_sf = $rs_chk_sf->num_rows;
								if($num_chk_sf>0){
									if($pass_t_sf==$pass and $staff_faculty_id == 0){
										$_SESSION['SES_EN_REG_ID'] = session_id();
										$_SESSION['SES_EN_REG_USER'] 	= $user;
										$_SESSION['SES_EN_REG_FAC_ID'] 	= $staff_faculty_id;
									 echo 3; // เข้าระบบได้เป็นสถานะ เจ้าหน้าที่ บัณฑิต
								
									
								  }else {
									 echo 05555; // เข้าระบบได้เป็นสถานะ เจ้าหน้าที่
								 
	
								}
							}
}
  
     
  
} else {
    echo 066666;//กลับหน้า login
}


?>
