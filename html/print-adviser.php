<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./header.php"?>
    <style type="text/css">
      @media print{
        #hid{
          display: none; /* ซ่อน  */
        }
      }
      .column {
    float:none;
    width: 50%;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    </style>
</head>
<body>
    
                  
                  
                   <center> <img class="center" src="../assets/img/logo/ตราสัญลักษณ์ประจำมหาวิทยาลัยมหาสารคาม.svg.png"   srcset="" width="80" > </center>
                    <h5 class="card-header text-center" >แต่งตั้งอาจารย์ระดับบัณฑิตวิทยาลัยประจำ</h5>
                    <div class="card-body">
                      <form action="" method="post">

                        
                        <div class="mb-3 row ">
                          <div class="mb-3 col-md-3 ">
                            <!-- <label >คณะ/วิทยาลัย/สถาบัน</label> -->
                            <div class="input-group center">
                            คณะ/วิทยาลัย/สถาบัน: &nbsp;<input   type="text" name="" id="" readonly>
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
                            <input  type="text" name="" id="" readonly>
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
                            <input  type="text" name="" id="" readonly>
                          </div>
                        </div>

                        <div class="mb-3 row">
                        <div class="mb-3 col-md-12">
                          <label >1.เสนอ</label> &nbsp;
                            <label >คำนำหน้าชื่อ</label>
                            <input   type="text" name="" id=""  size="7">
                            <label > ชื่อ</label>
                            <input   type="text" name="" id="" size="10">
                            <label >นามสกุล</label>
                            <input   type="text" name="" id="" size="10"> 
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <div class="list-group" >
                            <label class="list-group-item">
                              <input class="form-check-input me-1" type="checkbox" value="">
                              2.ความเห็นของภาควิชา
                            </label>
                            <label class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="">
                                3. ผลการพิจารณาของคณะกรรมการบัณฑิตศึกษาประจำคณะ 
                                <div class="mb-3 row">
                                  <div class="mb-3 col-md-12">
                                    <label >ครั้งที่</label>
                                    <input   type="text" name="" id=""readonly size="3">
                                    <label >วันที่</label>
                                    <input  type="date" name="" id="">
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
                                    <div class="mb-3 col-md-12">
                                      <label >ตำแหน่ง</label>
                                      <input type="text" name="" id="" size="7">
                                    
                                    </div>
                                    <div class="mb-3 col-md-12">
                                      <label > ชื่อ</label>
                                      <input   type="text" name="" id="" size="8">
                                        
                                    
                                    
                                      <label >นามสกุล</label>
                                      <input   type="text" name="" id="" size="8">
                                    </div>
                                  
                                  
                                    <div class="mb-3 row">
                                      <div class="mb-3 col-md-12">
                                        <label >วันที่</label>
                                        <input  type="date" name="" id="">
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="column" style="background-color:#F0F0F0;">
                                  <h4 class="h4">ประธานคณะกรรมการบัณฑิตศึกษาประจำคณะ</h4>
                                  <div class="mb-3 row">
                                  <div class="mb-3 col-md-12">
                                      <label >ตำแหน่ง</label>
                                      <input type="text" name="" id="" size="7">
                                    
                                    </div>
                                    <div class="mb-3 col-md-12">
                                      <label > ชื่อ</label>
                                      <input   type="text" name="" id="" size="8">
                                        
                                    
                                    
                                      <label >นามสกุล</label>
                                      <input   type="text" name="" id="" size="8">
                                    </div>
                                  
                                  
                                    <div class="mb-3 row">
                                      <div class="mb-3 col-md-12">
                                        <label >วันที่</label>
                                        <input  type="date" name="" id="">
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              
                          </div>
                        </div>
                        </center>

                        <div class="mt-2">
                          
                          <button id="hid" onclick="window.print();" class="btn btn-info"> print </button>
                          <!-- <button onclick="window" formaction="./appoint-adviser.php" class="btn btn-danger">back</a></button> -->

                        </div>
                      </form>

                    </div>
                  
    

</body>
</html>