<!DOCTYPE html>
<html lang="en"
>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

          <ul class="menu-inner py-1 ">
            <li class="menu-item ">
              <a href="index.php" class="menu-link">
                <!-- <i class="material-symbols-outlined"></i> -->
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics"> หน้าหลัก</div>
              </a>
            </li>
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

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include "./headbar.php" ?>
         <!-- / Navbar -->
                
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">คำสั่ง /</span> แต่งตั้งอาจารย์ประจำบัณฑิตวิทยาลัย</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link " href="./appoint-adviser.php"
                        ><i class="bx bx-id-card"></i> แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</a
                      >
                    </li>
                    
                      <li class="nav-item">
                        <a class="nav-link active" href="./appove-adviser.php"
                          ><i class="bx bxs-message-alt-check"></i> ยืนยันคำสั่งแต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</a
                        >
                      </li>
                    
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">ยืนยันคำสั่งแต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</h5>
                    
                    <div class="card-body">
                    <div class="card">
                
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th align="center">หมายเหตุ</th>
                        <th align="center">หัวหน้าภาควิชา</th>
                        <th align="center">ประธานคณะกรรมการบัณฑิตศึกษาประจำคณะ</th>
                        <th align="center">เจ้าหน้าที่บัณฑิต</th>
                        <th align="center">คณบดีบัณฑิตวิทยาลัย</th>
                        <th align="center">อธิการบดีมหาวิทยาลัย</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td align="center"><i class='bx bx-cog'></i></td>
                        <td align="center"><button type="button" class="btn btn-success">ยืนยัน</button></td>
                        <td align="center"><button type="button" class="btn btn-success">ยืนยัน</button></td>
                        <td align="center"><button type="button" class="btn btn-success">ยืนยัน</button></td>
                        <td align="center"><button type="button" class="btn btn-success">ยืนยัน</button></td>
                        <td align="center"><button type="button" class="btn btn-success">ยืนยัน</button></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
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

            
          </div>
          <!-- Content wrapper -->               
        
</body>
</html>