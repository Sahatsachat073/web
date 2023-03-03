<?php 
    require_once( "../inc/db_connect.php" );
    $mysqli = connect();
    // $strSQL = "SELECT * FROM status_student";
    $strSQL = "SELECT * FROM info_student";
    $objQuery = $mysqli->query($strSQL) or die ("Error Query [".$strSQL."]");
    
  
//  $query = "SELECT * FROM status_student  ";  //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC

//  //ประกาศตัวแปร sqli
//  $rs = $mysqli->query($query);

//  $row1 = $rs->fetch_array();

// echo $row1['s_name'];
?>



<!DOCTYPE html>


<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <!-- css table -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Edit</title>

    <?php include "./header.php" ?>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                
                <img src="../assets/img/logo/logo-icon.png" width="200" height="80">
                
              </span>
              
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
          <li class="menu-item ">
              <a href="./logout.php" class="menu-link">
                <!-- <i class="material-symbols-outlined"></i> -->
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Analytics"> ออกจากระบบ</div>
              </a>
            </li> 
            <!-- <li class="menu-item ">
              <a href="index.php" class="menu-link">
                
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics"> หน้าหลัก</div>
              </a>
            </li> -->
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="./page-report-account.php" class="menu-link">
                <!-- <i class="material-symbols-outlined"></i> -->
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics"> สถานะนิสิต</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">คำสั่ง</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./appoint-adviser.php" class="menu-link">
                    <div data-i18n="Without menu">คำสั่งแต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">เข้าศึกษาเทอม</div>
                  </a>
                </li>
                
              </ul>
            </li>
            
            <li class="menu-item">
              <a href=".html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Layouts"> ทุน</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="advisorreport.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Layouts"> อาจารย์ที่ปรึกษา</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="./layout examination-report-Admin.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Layouts"> สอบเค้าโคร่ง</div>
              </a>
            </li>
            <li class="menu-item">
              <a href=".html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div data-i18n="Layouts"> สอบวิทยานิพนธ์</div>
              </a>
            </li>
            <li class="menu-item">
              <a href=".html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-edit-alt"></i>
                <div data-i18n="Layouts"> ตรวจรูปแบบ</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="language-exam.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-receipt"></i>
                <div data-i18n="Layouts"> ผลสอบภาษา & Skill</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="./journal-Add.html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-bookmark"></i>
                <div data-i18n="Layouts"> วารสาร</div>
              </a>
            </li>
            <li class="menu-item">
              <a href=".html" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div data-i18n="Layouts"> สำเร็จการศึกษา</div>
              </a>
            </li>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        
          <!-- Navbar -->
          <?php include "./headbar.php" ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">ประวัติ /</span> ข้อมูลนิสิต
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-account.php"
                        ><i class="bx bx-user me-1"></i> ประวัตินิสิต</a
                      >
                    </li>
                    
                   
                    <li class="nav-item">
                      <a class="nav-link active" href="./page-report-account.php"
                        ><i class="bx bxs-data"></i> ข้อมูลนิสิต</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./order_education.php"
                        ><i class="bx bx-list-check"></i> ลำดับขั้นตอนการศึกษา</a
                      >
                    </li>
                    
                    
                  </ul>

                  <div class="content-wrapper">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <div class="card-body">
                        <!-- ค้นหาข้อมูล -->
                      <!-- <form class="form-inline" method="post" action="search.php">
                        <div class="mb-3 row">
                          <div >
                          <h5>ค้นหาข้อมูล</h5>
                          </div>
                          <div class="col-md-2">
                          <input type="text" name="roll_no" class="form-control" placeholder="กรอกรหัสนิสิต">
                          </div>
                          <div class="col-md-2">
                          <button type="submit" name="save" class="btn btn-warning">ค้นหาข้อมูล</button>
                          </div>
                        </div>
                      </form> -->
                      </div>
                    </div>
                    
                  </div>
                   
                  <div class="card">
                    
                    
                    <div class="table-responsive text-nowrap">
                      <table id="myTable" class="table table-active table-striped-columns" >
                        <thead>
                        <tr>
                          <!-- <th width="20"> <div align="center">ID </div></th> -->
                          <th width="10"> <div align="center">ID Student </div></th>
                          <!-- <th width="20"> <div align="center">status </div></th> -->

                          <th width="10"> <div align="center">Name </div></th>
                          <th width="10"> <div align="center">SurName </div></th>
                          
                          <th width="20"> <div align="center">level </div></th>

                          <th width="20"> <div align="center">STATUSPAYMENT </div></th>

                          
                          <th width="10"> <div align="center">faculty </div></th>
                          
                          <th width="30"> <div align="center">action </div></th>
                          
      
                          </tr>
                        </thead>
                        <tbody>
                          <?php while($objResult = mysqli_fetch_array($objQuery)): ?>
                            <tr>
                              <!-- <td><?php echo $objResult['stu_id']; ?></td> -->
                            <td align="center"><?php echo $objResult['STUDENTCODE']; ?></td>
                            <!-- <td><?php 
                             if($objResult['s_status']=='1'){
                              echo "ปกติ";
                            }
                            elseif($objResult['s_status']=='2'){
                              echo "รักษาสภาพ";
                            }
                            elseif($objResult['s_status']=='3'){
                              echo "ลาพักการศึกษา";
                            }
                            elseif($objResult['s_status']=='4'){
                              echo "พ้นสภาพ";
                            }
                            else{
                              echo "ข้อมูลไม่ถูกต้อง";
                            }
                             ?></td> -->
                            <td align="center"><?php echo $objResult['STUDENTNAME']; ?></td>
                            <td align="center"><?php echo $objResult['STUDENTSURNAME']; ?></td>
                            <td  align="center"><?php 
                            if($objResult['LEVELID']=='8'){
                              echo "ปริญญาเอกในระบบ";
                            }
                            elseif($objResult['LEVELID']=='9'){
                              echo "ปริญญาเอกนอกระบบ";
                            }
                            elseif($objResult['LEVELID']=='5'){
                              echo "ปริญญาโทในระบบ";
                            }
                            elseif($objResult['LEVELID']=='6'){
                              echo "ปริญญาโทนอกระบบ";
                            }
                              ?></td>
                            <td  align="center"><?php echo $objResult['STATUSPAYMENT']; ?></td>
                            
                            <td  align="center"><?php echo $objResult['FACULTYNAME']; 
                            ?></td>
                            
                            <td>
                              <!-- <a href="./pages-account-settings-accountEdit.php?stu_id=<?php echo $objResult["stu_id"];?>"><button type="button" class="btn btn-warning">Edit</button></a>
                              <a href="./process-Delete-account.php?tus_id=<?php echo $objResult["stu_id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                              <a   href="./pages-account-settings-accountDetails.php?stu_id=<?php echo $objResult["stu_id"];?>"><button class="btn btn-warning">Details</button></a>
                            </td>
                            </tr>
                          <?php endwhile ?>
                         
                        </tbody>
                      </table>
                      <label for="">status 1=ปกติ ,2=ลาพักการศึกษา ,3=รักษาสภาพนิสิต ,4=พ้นสภาพนิสิต</label>
                      <?php 
                      mysqli_close($mysqli);
                      ?>
                    </div>
                  </div>
                    
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include "./footer.php" ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- css table -->
    <script src="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

   

    <script>
      $(document).ready( function () {
        var table = $('#myTable').DataTable( {
          pageLength : 10,
          lengthMenu: [[ 10, 20,50,100, -1], [ 10, 20,50,100, 'Todos']]
        } )
      } );
    </script>
    
  </body>
</html>
