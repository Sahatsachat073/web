<?php 
    
    require_once( "../inc/db_connect.php" );
    $mysqli = connect();
   
    //  $id = "31";
    
  
 //$query = "SELECT * FROM status_student where CustomerID = '".$_GET["s_id"]."' ";  //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC

 //ประกาศตัวแปร sqli
 //$rs = $mysqli->query($query);

 //$row1 = $rs->fetch_array();

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

    <title>Account Edit</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/icons/brands/google.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
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
            <li class="menu-item active ">
              <a href="pages-account-settings-account.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics"> สถานะนิสิต</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-school"></i>
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
                <a href=".html" class="menu-link">
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
                <a href=".html" class="menu-link">
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

            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ประวัติ /</span> แก้ไขประวัตินิสิต</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link " href="pages-account-settings-account.php"
                        ><i class="bx bx-user me-1"></i> ประวัตินิสิต</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link " href="./page-report-account.php"
                        ><i class="bx bx-list-check"></i> ข้อมูลนิสิต</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" 
                        ><i class="bx bx-link-alt me-1"></i> รายละเอียดโปรไฟล์ส่วนบุคคล</a
                      >
                    </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">รายละเอียดโปรไฟล์</h5>
                    <?php
                          $strSQL = "SELECT * FROM info_student WHERE stu_id = '".$_GET["stu_id"]."' ";
                          $objQuery = $mysqli->query($strSQL);
                          $objResult = mysqli_fetch_array($objQuery);
                          if(!$objResult)
                          {
                          echo "Not found CustomerID=".$_GET["stu_id"];
                          }
                          else
                          {
                            

                    ?>
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        
                        <img
                          src="../assets/img/avatars/6.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="col-md-2">
                        
                            <!-- <label class="form-label" for="selectTypeOpt">สถานะนิสิต</label>
                            <input
                                  class="form-control"
                                  type="text"
                                  id="lastName"
                                  name="lastName"
                                  value="<?php 
                                    if ($row["s_status"]== '1') {
                                      echo  "ปกติ";
                                    }
                                    elseif ($row["s_status"]== '2') {
                                      echo  "ลาพัก";
                                    }
                                    elseif ($row["s_status"]=='3') {
                                      echo  "รักษาสภาพ";
                                    }
                                    elseif ($row["s_status"]== '4') {
                                      echo  "พ้นสภาพ";
                                    }
                                    else {
                                      echo  "Error";
                                    }
                                  ?>"

                                  
                                /> -->
                             
                        </div>
                     </div>

                    <!-- Account -->
                    <div class="card-body">
                    
                      <div class="row">
                        <div class="mb-3 row">
                              <div class="mb-3 col-md-2">
                                <label for="idStudent" class="form-label">รหัสนิสิต</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  maxlength="11"
                                  name="idStudent"
                                  value=" <?php echo $objResult['STUDENTCODE'];?>"
                                  readonly
                                  
                                />
                              </div>
                              <div class="mb-3 col-md-1">
                                <label  class="form-label">GPAX </label>
                                <input class="form-control" type="text" name="GPAX"  value="4.00" readonly/>
                              </div>
                              <div class="mb-3 col-md-2">
                                <label  class="form-label">ผลสอบภาษา </label>
                                <input class="form-control" type="text" name="examEng"  value="ไม่ผ่าน" readonly/>
                              </div>
                        </div>
                        <div class="mb-3 row">
                        <div class="mb-3 col-md-6">
                                        <label for="Faculty" class="form-label">ชื่อเรื่องวิทยานิพนธ์ภาษาไทย</label>
                                        <input type="text" class="form-control" id="Faculty" name="Faculty" value="" readonly/>
                                      </div>
                                    <div class="mb-3 col-md-6">
                                      <label for="Major" class="form-label">ชื่อเรื่องวิทยานิพนธ์ภาษาอังกฤษ</label>
                                      <input class="form-control" type="text" id="Major" name="Major" value="" readonly/>
                                    </div>
                        </div>
                              
                              <div class="mb-3 row">
                                <div class="mb-3 col-md-4">
                                  <label for="firstName" class="form-label">ชื่อ</label>
                                  <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $objResult['STUDENTNAME']?>" readonly/>
                                </div>
                                <div class="mb-3 col-md-4">
                                  <label for="email" class="form-label">สกุล</label>
                                  <input
                                    class="form-control"
                                    type="text"
                                    id="lastName"
                                    name="lastName"
                                    value="<?php echo $objResult['STUDENTSURNAME']?>"
                                    readonly
                                  />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <div class="mb-3 col-md-2">
                                  <label for="yearStudy" class="form-label">ปีที่เข้า</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="yearStudy"
                                    name="yearStudy"
                                    value="<?php echo $objResult['ADMITACADYEAR']?>"
                                    readonly
                                  />
                                </div>
                                <div class="mb-3 col-md-1">
                                  <label class="form-label" >ภาคการศึกษา</label>
                                 
                                    <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name=""
                                    value="<?php echo $objResult['ADMITSEMESTER']?>"
                                    readonly
                                  />
                                  
                                </div>
                                <div class="mb-3 col-md-2">
                                  <label class="form-label" >ระดับการศึกษา</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id=""
                                    name=""
                                    value="<?php if ($objResult['LEVELID']=='5') {
                                      echo "ปริญญาโทในระบบ";
                                    }elseif ($objResult['LEVELID']=='6') {
                                      echo "ปริญญาโทนอกระบบ";
                                    }elseif ($objResult['LEVELID']=='8') {
                                      echo "ปริญญาโทในระบบ";
                                    }elseif ($objResult['LEVELID']=='9') {
                                      echo "ปริญญาโทนอกระบบ";
                                    }else {
                                      echo "ข้อมูลไม่ถูกต้อง";
                                    } ?>"
                                    readonly
                                  />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <div class="mb-3 col-md-4">
                                  <label for="Faculty" class="form-label">คณะ</label>
                                  <input type="text" class="form-control"  name="Faculty" value="<?php echo $objResult['FACULTYNAME']?>" readonly/>
                                </div>
                                <div class="mb-3 col-md-5">
                                  <label for="Major" class="form-label">สาขา</label>
                                  <input class="form-control" type="text" id="Major" name="Major" value="<?php echo $objResult['PROGRAMNAME']?>" readonly/>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <div class="mb-3 col-md-3">
                                  <label for="zipCode" class="form-label">ค่าธรรมเนียมเหมาจ่าย</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value=""
                                    readonly
                                  />
                                </div>
                                <div class="mb-3 col-md-3">
                                  <label for="zipCode" class="form-label">ค่าธรรมเนียมต่อเทอม</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value="<?php echo $objResult["SumOfAMOUNT"] ?>"
                                    readonly
                                  />
                                </div>
                                <div class="mb-3 col-md-2">
                                  <label for="zipCode" class="form-label">จำนวนงวดที่จะต้องจ่าย</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value=""
                                    readonly
                                  />
                                </div>
                                <div class="mb-3 col-md-2">
                                  <label for="zipCode" class="form-label">จำนวนงวดที่ี่จ่ายแล้ว</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value=""
                                    readonly
                                  />
                                </div>
                              </div>
                                <div class="mb-3 col-md-2">
                                  <label  class="form-label">สถานะการรายงานตัว</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    readonly
                                    name="reportStatus"
                                    value="<?php echo $objResult['STATUSREGIST']?>"
                                    
                                  />
                                </div>
                                <div class="mb-3 col-md-2">
                                  <label for="zipCode" class="form-label">ชำระเงิน</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    readonly
                                    name="pay"
                                    value="<?php echo $objResult['STATUSPAYMENT']?>"
                                    
                                  />
                                </div>
                                <div class="mb-3 col-md-2">
                                  <label  class="form-label">สัญชาติ</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    readonly
                                    name="nationality"
                                    value="<?php echo $objResult['NATIONNAMETH']?>"
                                    
                                  />
                                </div>
                                <div class="mb-3 row">
                                  <div class="mb-3 col-md-3">
                                    <label for="currency" class="form-label">เลขบัตร ปชช</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      readonly
                                      name="idCard"
                                      value="<?php echo $objResult['CITIZENID']?>"
                                      maxlength="13"
                                    />
                                  </div>
                                  <div class="mb-3 col-md-3">
                                    <label for="currency" class="form-label">พาสสปอร์ต</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      readonly
                                      name="idPassport"
                                      value="<?php ?>"
                                      maxlength="13"
                                    />
                                  </div>
                                  <div class="mb-3 col-md-3">
                                    <label for="currency" class="form-label">อาจารย์ที่ปรึกษา</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="zipCode"
                                      name="zipCode"
                                      placeholder="อาจารย์ที่ปรึกษา"
                                      readonly
                                    />
                                  </div>
                                  
                                    <div class="table-responsive text-nowrap">
                                      <table class="table table-bordered" align="center" >
                                          <thead>
                                            <tr>
                                              <td align="center" colspan="2"><h5>term</h5>  </td>
                                              <td align="center" rowspan="2"><h5>Semester</h5>  </td>
                                              <td align="center" colspan="2"><h5>Gpa</h5>  </td>
                                            </tr>
                                            
                                          </thead>
                                          <tbody >
                                            <tr>
                                              <td align="center" colspan="2">2 </td>
                                              <td align="center"> Fall 2564</td>
                                              <td align="center" colspan="2"> 4.00 </td>
                                            </tr>
                                            <tr>
                                              <td align="center" colspan="2">1 </td>
                                              <td align="center"> Fall 2565</td>
                                              <td align="center" colspan="2"> 4.00 </td>
                                            </tr>
                                            <tr>
                                              <td align="center" colspan="2">2 </td>
                                              <td align="center"> Fall 2565</td>
                                              <td align="center" colspan="2"> 3.89 </td>
                                            </tr>
                                            
                                          </tbody>
                                          <tfoot>
                                            
                                            <tr>
                                              <td align="right" colspan="3" class="footer"><h5>GPAX:</h5></td>
                                              <td align="center" colspan="3">3.95 </td>
                                            </tr>
                                      </table>
                                    </div>
                                </div>
                              </div>
                               
                               
                            
                      </div>
                        <div class="mt-2">
                          <!-- <input type="hidden" name="id" value="<?php echo $id ?>"> -->
                          
                          <a href="./page-report-account.php"><button type="button" class="btn btn-outline-danger">Cancel</button></a>
                          
                        </div>
                        <?php
                          } 
                      mysqli_close($mysqli);
                      ?>
                      
                    
                    <!-- /Account -->
                  </div>
                  <!-- <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://grad.msu.ac.th/th/" target="_blank" class="footer-link fw-bolder">Graduate School Mahasarakham University</a>
                </div>
                
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    
        <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
 
  </body>
</html>
