<!DOCTYPE html>
<html lang="en"
>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

   
    <?php include "./header.php" ?>
    <style>
    
    .column {
    float:none;
    width: 50%;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    .temp123{
    margin: 0 auto;
    margin-left: auto;
    margin-right: auto;
    text-align:center;
    float: inline-start;
    }
    .h4 {
      text-align: center;
      margin-top: 5%;
    }
    </style>
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

          <ul class="menu-inner py-1 ">
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
            <li class="menu-item  ">
              <a href="pages-account-settings-account.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Analytics"> สถานะนิสิต</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item active">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-school"></i>
                <div data-i18n="Layouts">คำสั่ง</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="./appoint-adviser.php" class="menu-link">
                    <div data-i18n="Without menu">แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</div>
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

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include "./headbar.php" ?>
         <!-- / Navbar -->
                
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">คำสั่ง /</span> แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="./appoint-adviser.php"
                        ><i class="bx bx-id-card"></i> คำสั่งแต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</a
                      >
                    </li>
                    
                      <li class="nav-item">
                        <a class="nav-link " href="./appove-adviser.php"
                          ><i class="bx bxs-message-alt-check"></i> ยืนยัน</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="./print-adviser.php"
                          ><i class="bx bxs-printer"></i> พิมพ์คำสั่งแต่งตั้งอาจารย์</a
                        >
                      </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</h5>
                    
                    <div class="card-body">
                      <form action="" method="post">
                        <div class="mb-3 row">
                          <div class="mb-3 col-md-5">
                            <label >เลือกไฟล์แบบเสนอแต่งตั้งอาจารย์ระดับบัณฑิตศึกษาประจำ</label>
                            <div class="input-group">
                              <input type="file" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">ยืนยัน</button>
                            </div>
                          </div>
                          <div class="mb-3 col-md-5">
                            <label >เลือกไฟล์บันทึกข้อความ</label>
                            <div class="input-group">
                              <input type="file" class="form-control"  aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                              <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">ยืนยัน</button>
                            </div>
                          </div>
                        </div> 

                        <div class="mb-3 row">
                          <div class="mb-3 col-md-4">
                            <label >คณะ/วิทยาลัย/สถาบัน</label>
                            <div class="input-group">
                              <input  class="form-control" type="text" name="" id="">
                            </div>
                          </div>
                          
                        </div> 

                        <div class="mb-3 row">
                          <div class="mb-3 col-md-12">
                            <label >หลักสูตรระดับ</label> &nbsp;
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> ปริญญาโท  </label> &nbsp;
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> ปริญญาเอก  </label> &nbsp;
                            
                            <label for="vehicle3"> สาขาวิชา </label>
                            <input  type="text" name="" id="">
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <div class="mb-3 col-md-12">
                            <label >ประเภทหลักสูตร</label> &nbsp;
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> หลักสูตรใหม่   </label> &nbsp;
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> หลักสูตรปรับปรุง  </label> &nbsp;
                            
                            <label for="vehicle3"> พ.ศ. </label>
                            <input  type="text" name="" id="">
                          </div>
                        </div>

                        <div class="mb-3 row">
                        <div class="mb-3 col-sm-2">
                            <label >ตำแหน่ง</label>
                            <select name="selectTypeSta" class="form-select color-dropdown">
                                  <option value="0"  selected>---</option>
                                  <option value="1" >ผศ.ดร</option>
                                  <option value="2" >รองผศ.ดร</option>
                                  <option value="3" >ดร.</option>
                                </select>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label >1.เสนอ ชื่อ</label>
                              <div class="input-group">
                                <input  class="form-control" type="text" name="" id="">
                              </div>
                          </div>
                          <div class="mb-3 col-md-3">
                            <label >นามสกุล</label>
                              <div class="input-group">
                                <input  class="form-control" type="text" name="" id="">
                              </div>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <div class="list-group">
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              2.ความเห็นของภาควิชา
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                3. ผลการพิจารณาของคณะกรรมการบัณฑิตศึกษาประจำคณะ 
                                <div class="mb-3 row">
                                  <div class="mb-3 col-md-1">
                                  <label >ครั้งที่</label>
                                    <div class="input-group">
                                      <input  class="form-control" type="text" name="" id="">
                                    </div>
                                  </div>
                                  <div class="mb-3 col-md-2">
                                    <label >วันที่</label>
                                    <div class="input-group">
                                      <input class="form-control" type="date" name="" id="">
                                    </div>
                                  </div>
                                </div>
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              4.ประสบการณ์การทำงาน (รวมถึงประสบการณ์การเป็นอาจารย์พิเศษ/ผู้ทรงคุณวุฒิ/ที่ปรึกษาให้กับสถาบันต่างๆ)
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              5. ผลงานทางวิชาการ
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              6. รางวัล/เกียรติบัตร/ประกาศเกียรติคุณ/อื่นๆ ที่เคยได้รับ
                            </label>
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              7. ความเชี่ยวชาญพิเศษ
                            </label>
                          </div>
                        </div> 
                        <center>
                        <div class="mb-3 row">
                          <div class="mb-3 row">
                          
                              <div class="column" style="background-color:#F0F0F0;">
                                  <h4 class="h4">หัวหน้าภาควิชา</h4>
                                  <div class="mb-3 row">
                                    <div class="mb-3 col-sm-3">
                                      <label >ตำแหน่ง</label>
                                      <select name="selectTypeSta" class="form-select color-dropdown">
                                            <option value="0"  selected>---</option>
                                            <option value="1" >ผศ.ดร</option>
                                            <option value="2" >รองผศ.ดร</option>
                                            <option value="3" >ดร.</option>
                                          </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                      <label >1.เสนอ ชื่อ</label>
                                        <div class="input-group">
                                          <input  class="form-control" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                      <label >นามสกุล</label>
                                        <div class="input-group">
                                          <input  class="form-control" type="text" name="" id="">
                                        </div>
                                    </div>
                                  
                                  
                                    <div class="mb-3 row">
                                      <div class="mb-3 col-md-4">
                                        <label >วันที่</label>
                                        <div class="input-group">
                                          <input class="form-control" type="date" name="" id="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="column" style="background-color:#F0F0F0;">
                                  <h4 class="h4">ประธานคณะกรรมการบัณฑิตศึกษาประจำคณะ</h4>
                                  <div class="mb-3 row">
                                    <div class="mb-3 col-sm-3">
                                      <label >ตำแหน่ง</label>
                                      <select name="selectTypeSta" class="form-select color-dropdown">
                                            <option value="0"  selected>---</option>
                                            <option value="1" >ผศ.ดร</option>
                                            <option value="2" >รองผศ.ดร</option>
                                            <option value="3" >ดร.</option>
                                          </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                      <label >1.เสนอ ชื่อ</label>
                                        <div class="input-group">
                                          <input  class="form-control" type="text" name="" id="">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                      <label >นามสกุล</label>
                                        <div class="input-group">
                                          <input  class="form-control" type="text" name="" id="">
                                        </div>
                                    </div>
                                  
                                  
                                    <div class="mb-3 row">
                                      <div class="mb-3 col-md-4">
                                        <label >วันที่</label>
                                        <div class="input-group">
                                          <input class="form-control" type="date" name="" id="">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              
                          </div>
                        </div>
                        </center>
                        <div class="mt-2">
                          <button  onClick="logout()" type="button" class="btn btn-success">ยืนยัน</button>
                          <!-- <button id="hid" onclick="window.print();" class="btn btn-primary"> print </button> -->
                          <button formaction="./print-adviser.php" class="btn btn-outline-dark">create PDF <i class='bx bxs-file-pdf' ></i></a></button>
                          
                        </div>
                      </form>

                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include "./footer.php" ?>
            <!-- / Footer -->

            
          </div>
          <!-- Content wrapper -->               
          <script>
            
            function logout() {
                swal(
                  'เรียบร้อย!',
                  'คุณได้บันทึกไฟล์แล้ว',
                  'success'
                )
              }
</script>
</body>
</html>