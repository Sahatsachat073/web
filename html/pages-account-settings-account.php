
<?php 
    session_start();
    session_id();
    require_once( "../inc/db_connect.php" );
    $mysqli = connect();
    $query = "SELECT * FROM info_student WHERE STUDENTCODE =".$_SESSION['SES_EN_REG_USER'] ;
    $result = mysqli_query($mysqli,$query);
    
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

    <title>Account</title>

    <?php include "./header.php" ?>
  </head>

  <body>
   
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
          <a href="index.php" class="app-brand-link">
              <span class="app-brand-logo demo">
                
                <img src="../assets/img/logo/logo-icon.png" width="200" height="80">
                
              </span>
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
              
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
                <i class="material-symbols-outlined"></i>
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics"> หน้าหลัก</div>
              </a>
            </li> -->
            <!-- Dashboard -->
            <li class="menu-item active ">
              <a href="pages-account-settings-account.php" class="menu-link">
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
                <a href="./layout examination-report-Admin.html" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-detail"></i>
                  <div data-i18n="Layouts"> สอบเค้าโครง</div>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ประวัติ /</span> ประวัตินิสิต</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="pages-account-settings-account.php"
                        ><i class="bx bx-user me-1"></i> ประวัตินิสิต</a
                      >
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link " href="page-report-account.php"
                        ><i class="bx bxs-data"></i> ข้อมูลนิสิต</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./order_education.php"
                        ><i class="bx bx-list-check"></i> ลำดับขั้นตอนการศึกษา</a
                      >
                    </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">รายละเอียดโปรไฟล์</h5>
                    <!-- Account -->
                    <?php while($row = $result->fetch_assoc()): ?>
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
                    
                      
                      <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                          <div class="row">
                          
                                   
                            <div class="mb-3 row">       
                              <div class="mb-3 col-md-2">
                                <label for="idStudent" class="form-label">รหัสนิสิต </label>
                                <input class="form-control" type="text" name="firstName"  value="<?php echo $row["STUDENTCODE"]?>" readonly/>
                              </div>
                              <div class="mb-3 col-md-1">
                                <label  class="form-label">GPAX </label>
                                <input class="form-control" type="text" name="GPAX"  value="" readonly/>
                              </div>
                              <div class="mb-3 col-md-2">
                                <label  class="form-label">ผลสอบภาษา </label>
                                <input class="form-control" type="text" name="examEng"  value="" readonly/>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <div class="mb-3 col-md-12">
                                <label for="Faculty" class="form-label">ชื่อเรื่องวิทยานิพนธ์ภาษาไทย</label>
                                <input type="text" class="form-control" id="Faculty" name="Faculty" value="" readonly/>
                              </div>      
                            </div>
                            <div class="mb-3 row">
                              <div class="mb-3 col-md-12">
                                <label for="Faculty" class="form-label">ชื่อเรื่องวิทยานิพนธ์ภาษาไทย</label>
                                <input type="text" class="form-control" id="Faculty" name="Faculty" value="" readonly/>
                              </div>      
                            </div>
                        
                            <div class="mb-3 row">
                              <div class="mb-3 col-md-3">
                                <label for="firstName" class="form-label">ชื่อ</label>
                                <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $row["STUDENTNAME"] ?>" readonly/>
                                
                              </div>
                              <div class="mb-3 col-md-3">
                                <label for="email" class="form-label">สกุล</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  id="lastName"
                                  name="lastName"
                                  value="<?php echo $row["STUDENTSURNAME"]?>"
                                  readonly
                                />
                              </div>
                              <div class="mb-3 col-md-2">
                                <label for="email" class="form-label">เบอร์โทรศัพท์</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  name="phone"
                                  value="<?php echo $row["STUDENTMOBLIE"]?>"
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
                                  value="<?php echo $row["ADMITACADYEAR"] ?>"
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
                                    value="<?php echo $row['ADMITSEMESTER']?>"
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
                                    value="<?php if ($row['LEVELID']=='5') {
                                      echo "ปริญญาโทในระบบ";
                                    }elseif ($row['LEVELID']=='6') {
                                      echo "ปริญญาโทนอกระบบ";
                                    }elseif ($row['LEVELID']=='8') {
                                      echo "ปริญญาโทในระบบ";
                                    }elseif ($row['LEVELID']=='9') {
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
                                <input type="text" class="form-control" id="Faculty" name="Faculty" value="<?php echo $row["FACULTYNAME"] ?>" readonly/>
                              </div>
                              <div class="mb-3 col-md-6">
                                <label for="Major" class="form-label">สาขา</label>
                                <input class="form-control" type="text" id="Major" name="Major" value="<?php echo $row["PROGRAMNAME"] ?>" readonly/>
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
                                    value="<?php echo $row["SumOfAMOUNT"] ?>"
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
                                <label for="zipCode" class="form-label">สถานะการรายงานตัว</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="zipCode"
                                  name="zipCode"
                                  value="<?php echo $row["STATUSREGIST"] ?>"
                                  readonly
                                />
                              </div>
                              <div class="mb-3 col-md-2">
                                <label for="zipCode" class="form-label">ชำระเงิน</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="zipCode"
                                  name="zipCode"
                                  value="<?php echo $row["STATUSPAYMENT"] ?>"
                                  readonly
                                />
                              </div>
                              <div class="mb-3 col-md-2">
                                <label for="currency" class="form-label">สัญชาติ</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="zipCode"
                                  name="zipCode"
                                  value="<?php echo $row["NATIONNAMETH"] ?>"
                                  readonly
                                />
                              </div>
                              <div class="mb-3 row">
                                <div class="mb-3 col-md-2">
                                  <label for="currency" class="form-label">เลขบัตร ปชช</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value="<?php echo $row["CITIZENID"] ?>"
                                    maxlength="13"
                                    readonly
                                  />
                                </div>
                                <div class="mb-3 col-md-3">
                                  <label for="currency" class="form-label">พาสสปอร์ต</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="zipCode"
                                    name="zipCode"
                                    value=""
                                    maxlength="13"
                                    readonly
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
                                </div>
                                
                                <div class="mb-3 row">
                                  
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
                          
                        </form>
                      </div>
                    
                      <!-- /Account -->
                    <?php endwhile ?>
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

      
  </body>
</html>




