<?php
// ฟังก์ชันสำหรับเชื่อมต่อกับฐานข้อมูล
function connect()
{
  // เริ่มต้นส่วนกำหนดการเชิ่อมต่อฐานข้อมูล //  
	 $db_config=array(
		"host"=>"localhost",  // กำหนด host
		"user"=>"root", // กำหนดชื่อ user
		"pass"=>"",   // กำหนดรหัสผ่าน
		"dbname"=>"grad_status",  // cars
		"charset"=>"utf8"  // กำหนด charset
	);
  // สิ้นสุดดส่วนกำหนดการเชิ่อมต่อฐานข้อมูล // 	
	$mysqli = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
	if(mysqli_connect_error()) {
		die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		exit;
	}
	if(!$mysqli->set_charset($db_config["charset"])) { // เปลี่ยน charset เป้น utf8 พร้อมตรวจสอบการเปลี่ยน
	//    printf("Error loading character set utf8: %sn", $mysqli->error);  // ถ้าเปลี่ยนไม่ได้
	}else{
	//    printf("Current character set: %sn", $mysqli->character_set_name()); // ถ้าเปลี่ยนได้
	}
	return $mysqli;
	//echo $mysqli->character_set_name();  // แสดง charset เอา comment ออก
	//echo 'Success... ' . $mysqli->host_info . "n";
	//$mysqli->close();  
}
//	  ฟังก์ชันสำหรับคิวรี่คำสั่ง sql
function query($sql)
{
	global $mysqli;
	if($mysqli->query($sql)) { return true; } 
	else { die("SQL Error: <br>".$sql."<br>".$mysqli->error); return false; }
}
//    ฟังก์ชัน select ข้อมูลในฐานข้อมูลมาแสดง
function select($sql)
{
	global $mysqli;	
	$result=array();
	$res = $mysqli->query($sql) or die("SQL Error: <br>".$sql."<br>".$mysqli->error);
	while($data= $res->fetch_assoc()) {
		$result[]=$data;
	}
	return $result;	
}
//    ฟังก์ชันสำหรับการ insert ข้อมูล
function insert($table,$data)
{
	global $mysqli;		
	$fields=""; $values="";
	$i=1;
	foreach($data as $key=>$val)
	{
		if($i!=1) { $fields.=", "; $values.=", "; }
		$fields.="$key";
		$values.="'$val'";
		$i++;
	}
	$sql = "INSERT INTO $table ($fields) VALUES ($values)";
	if($mysqli->query($sql)) { return true; } 
	else { die("SQL Error: <br>".$sql."<br>".$mysqli->error); return false; }
}
//    ฟังก์ชันสำหรับการ update ข้อมูล
function update($table,$data,$where)
{
	global $mysqli;			
	$modifs="";
	$i=1;
	foreach($data as $key=>$val)
	{
		if($i!=1){ $modifs.=", "; }
		if(is_numeric($val)) { $modifs.=$key.'='.$val; }
		else { $modifs.=$key.' = "'.$val.'"'; }
		$i++;
	}
	$sql = ("UPDATE $table SET $modifs WHERE $where");
	if($mysqli->query($sql)) { return true; } 
	else { die("SQL Error: <br>".$sql."<br>".$mysqli->error); return false; }
}
//    ฟังก์ชันสำหรับการ delete ข้อมูล
function delete($table, $where)
{
	global $mysqli;			
	$sql = "DELETE FROM $table WHERE $where";
	if($mysqli->query($sql)) { return true; } 
	else { die("SQL Error: <br>".$sql."<br>".$mysqli->error); return false; }
}
//    ฟังก์ชันสำหรับแสดงรายการฟิลด์ในตาราง
function listfield($table)
{
	global $mysqli;			
	$sql="SELECT * FROM $table LIMIT 1 ";
	$row_title="\$data=array(<br/>";
	$res = $mysqli->query($sql) or die("SQL Error: <br>".$sql."<br>".$mysqli->error);
	$i=1;
	while($data= $res->fetch_field()) {
		$var=$data->name;
		$row_title.="\"$var\"=>\"value$i\",<br/>";
		$i++;
	}	
	$row_title.=");<br/>";
	echo $row_title;
}
     function get_row( $query )
    {
        $query = $this->link->query( $query );
        if( mysqli_error( $this->link ) )
        {
            //$this->log_db_errors( mysqli_error( $this->link ), $query, 'Fatal' );
            return false;
        }
        else
        {
            $r = mysqli_fetch_row( $query );
            mysqli_free_result( $query );
            return $r;   
        }
    }
function tel_format($mobile){
	$minus_sign = "-"; 
	$part1 = substr ( $mobile , 0 , -7 ); 
	$part2 = substr( $mobile , 3 , -3 ); 
	$part3 = substr( $mobile , 7 ); 
	return $part1. $minus_sign . $part2 . $minus_sign . $part3;
}

function thaiDate($datetime) {
	list($date,$time) = split(' ',$datetime); // แยกวันที่ กับ เวลาออกจากกัน
	list($H,$i,$s) = split(':',$time); // แยกเวลา ออกเป็น ชั่วโมง นาที วินาที
	list($Y,$m,$d) = split('-',$date); // แยกวันเป็น ปี เดือน วัน
	$Y = $Y+543; // เปลี่ยน ค.ศ. เป็น พ.ศ.
	
    return $d."/".$m."/".$Y;
}

function DateThai1($strDate)
{
    $strYear = date("Y",strtotime($strDate))+543;
    $strMonth= date("n",strtotime($strDate));
    $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
    $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    $strMonthThai=$strMonthCut[$strMonth];
    return "วันที่ $strDay $strMonthThai $strYear, เวลา $strHour:$strMinute";
}

function date_format_convert($date_get){
	$today = date("Y-m-d");
	list($byear, $bmonth, $bday)= explode("-",$date_get);
	list($tyear, $tmonth, $tday)= explode("-",$today);	
	$mbirthday = mktime(0, 0, 0, $bmonth, $bday, $byear); 
	$mnow = mktime(0, 0, 0, $tmonth, $tday, $tyear );
	$mage = ($mnow - $mbirthday);
	$u_y=date("Y", $mage)-1970;
	$u_m=date("m",$mage)-1;
	$u_d=date("d",$mage)-1;
	return "$u_y ปี $u_m เดือน $u_d วัน";
}

function timespan($seconds = 1, $time = '')
{
	if ( ! is_numeric($seconds)){
		$seconds = 1;
	}
	if ( ! is_numeric($time)){
		$time = time();
	}
	if ($time <= $seconds){
		$seconds = 1;
	}
	else{
		$seconds = $time - $seconds;
	}
	$str = '';
	$years = floor($seconds / 31536000);
	if ($years > 0){	
		$str .= $years.' ปี, ';
	}	
	$seconds -= $years * 31536000;
	$months = floor($seconds / 2628000);
    
	if ($years > 0 OR $months > 0){
		if ($months > 0){	
			$str .= $months.' เดือน, ';
		}	
		$seconds -= $months * 2628000;
	}
	$weeks = floor($seconds / 604800);
	if ($years > 0 OR $months > 0 OR $weeks > 0){
		if ($weeks > 0){	
			$str .= $weeks.' สัปดาห์, ';
		}
		$seconds -= $weeks * 604800;
	}			
	$days = floor($seconds / 86400);
	if ($months > 0 OR $weeks > 0 OR $days > 0){
		if ($days > 0){	
			$str .= $days.' วัน, ';
		}
		$seconds -= $days * 86400;
	}
	$hours = floor($seconds / 3600);
	if ($days > 0 OR $hours > 0){
		if ($hours > 0){
			$str .= $hours.' ชั่วโมง, ';
		}
		$seconds -= $hours * 3600;
	}
	$minutes = floor($seconds / 60);
	if ($days > 0 OR $hours > 0 OR $minutes > 0){
		if ($minutes > 0){	
			$str .= $minutes.' นาที, ';
		}
		$seconds -= $minutes * 60;
	}
	if ($str == ''){
		$str .= $seconds.' วินาที';
	}
	return substr(trim($str), 0, -1);
}

?>