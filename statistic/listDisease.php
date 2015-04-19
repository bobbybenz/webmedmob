<?php
	$title = "รายการโรค";
	include('header.php');
	//include('<subheader_disease class="php"></subheader_disease>');
?>
<style>
/*
Back to top button 
*/
#back-top {
  position: fixed;
  bottom: 30px;
  right:100px;
}
#back-top a {
  width: 50px;
  display: block;
  text-align: center;
  font: 11px/100% Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  text-decoration: none;
  color: #bbb;
  /* background color transition */
  -webkit-transition: 1s;
  -moz-transition: 1s;
  transition: 1s;
}
#back-top a:hover {
  color: #000;
}
/* arrow icon (span tag) */
#back-top span {
  width: 50px;
  height: 50px;
  display: block;
  margin-bottom: 7px;
  background: #ddd url(/images/up-arrow.png) no-repeat center center;
  /* rounded corners */
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
  /* background color transition */
  -webkit-transition: 1s;
  -moz-transition: 1s;
  transition: 1s;
}
#back-top a:hover span {
  background-color: #777;
}

.modal-wide .modal-dialog {
  width: 80%; /* or whatever you wish */
}
</style>
  <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a href="#">
                      Start Bootstrap
                  </a>
              </li>
              <li>
                  <a href="Main.php">Main</a>
              </li>
              <li>
                  <a href="listDisease.php">Table</a>
              </li>
              <li>
                  <a href="listArea.php">Area</a>
              </li>
          </ul>
      </div>
      <!-- /#sidebar-wrapper -->

      <div id="page-content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>แสดงจำนวนผู้ป่วยในแต่ละโรค</h2><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
            <div class="col-md-2">
              <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                  Launch demo modal
                </button>
            </div>
            <div class="col-md-4">
              <select id="disease-select" style="margin-top: 25px;" class="form-control">
              <option value = "1">โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</option>
              <option value = "2">โรคระบบทางเดินอาหารและโรคติดต่อโดนทางเดินอาหาร</option>
              <option value = "3">โรคระบบประสาทและสมอง</option>
              <option value = "4">โรคระบบไหลเวียนโลหิตและโรคเลือด</option>
              <option value = "5">โรคระบบกระดูกและกล้ามเนื้อ</option>
              <option value = "6">โรคระบบต่อมไร้ท่อและโภชนาการ</option>
              <option value = "7">โรคระบบทางเดินปัสสาวะ</option>
              <option value = "8">โรคระบบอวัยวะสืบพันธุ์ชาย</option>
              <option value = "9">โรคระบบอวัยวะสืบพันธุ์หญิงและการตั้งครรภ์</option>
              <option value = "10">โรคหู</option>
              <option value = "11">โรคตา</option>
              <option value = "12">โรคผิวหนัง</option>
              <option value = "13">โรคติดต่อทางเพศสัมพันธ์</option>
              <option value = "14 สารพิษ และสัตว์พิษ">โรคที่เกิดจากอุบัติเหตุ สารพิษ และสัตว์พิษ</option>
              <option value = "15">โรคติดเชื้อ</option>
              <option value = "16">โรคพยาธิ</option>
              <option value = "17">โรคมะเร็ง</option>
              <option value = "18">โรคติดเชื้ออุบัติใหม่</option>
            </select>
            </div>
          </div>
          
          <hr style="border: 3px outset #595955;">
          
          <p style="display: block;z-index:99;" id="back-top">
            <a href="#"><span></span></a>
          </p>
          <!-- <div id="piechart1" style="width: 500px; height: 400px;"></div> -->
          <div class="row" id="list-disease1">
            <div class="col-md-12">
              <h3>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</h3> 
              <table class="table">
                <thead>
                  <tr>
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

          <hr/>
          <div class="row" id="list-disease2">
            <div class="col-md-12">
              <h3>โรคระบบทางเดินอาหารและโรคติดต่อโดนทางเดินอาหาร</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->
          
          <hr/>
          <div class="row" id="list-disease3">
            <div class="col-md-12">
              <h3>โรคระบบประสาทและสมอง</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->
          
                    <hr/>
          <div class="row" id="list-disease4">
            <div class="col-md-12">
              <h3>โรคระบบไหลเวียนโลหิตและโรคเลือด</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease5">
            <div class="col-md-12">
              <h3>โรคระบบกระดูกและกล้ามเนื้อ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease6">
            <div class="col-md-12">
              <h3>โรคระบบต่อมไร้ท่อและโภชนาการ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease7">
            <div class="col-md-12">
              <h3>โรคระบบทางเดินปัสสาวะ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease8">
            <div class="col-md-12">
              <h3>โรคระบบอวัยวะสืบพันธุ์ชาย</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease9">
            <div class="col-md-12">
              <h3>โรคระบบอวัยวะสืบพันธุ์หญิงและการตั้งครรภ์</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease10">
            <div class="col-md-12">
              <h3>โรคหู</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease11">
            <div class="col-md-12">
              <h3>โรคตา</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease12">
            <div class="col-md-12">
              <h3>โรคผิวหนัง</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease13">
            <div class="col-md-12">
              <h3>โรคติดต่อทางเพศสัมพันธ์</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease14">
            <div class="col-md-12">
              <h3>โรคที่เกิดจากอุบัติเหตุ สารพิษ และสัตว์พิษ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

                    <hr/>
          <div class="row" id="list-disease15">
            <div class="col-md-12">
              <h3>โรคติดเชื้อ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

          <hr/>
          <div class="row" id="list-disease16">
            <div class="col-md-12">
              <h3>โรคพยาธิ</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

          <hr/>
          <div class="row" id="list-disease17">
            <div class="col-md-12">
              <h3>โรคมะเร็ง</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->

          <hr/>
          <div class="row" id="list-disease18">
            <div class="col-md-12">
              <h3>โรคติดเชื้ออุบัติใหม่</h3> 
              <table class="table">
                <thead>
                  <tr>  
                    <th style="width:6%;text-align: center;">#</th>
                    <th style="text-align: center;">โรคที่พบมาก</th>
                    <th style="width:8%;text-align: center;">ภาคกลาง</th>
                    <th style="width:8%;text-align: center;">ภาคเหนือ</th>
                    <th style="width:8%;text-align: center;">ภาคใต้</th>
                    <th style="width:8%;text-align: center;">ภาคออก</th>
                    <th style="width:8%;text-align: center;">ภาคตก</th>
                    <th style="width:10%;text-align: center;">รวม(คน)</th>
                    <th style="width:15%;text-align: center;">เปอร์เซนต์รวม(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
              <!--       <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">10</td>
                    <td style="text-align: right;">20</td> -->
                  </tr>
                  <tr>
                    <td style="text-align: center;">2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">10</td>
                    <td style="text-align: center;">20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- list-disease -->



        </div><!-- container -->
      </div><!-- page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
<!-- Modal -->
<div class="modal fade modal-wide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">โรคไข้เลือดออก</h4>
      </div>
      <div class="modal-body">
          <!-- Display Data -->
          <div class="row">
            <div class="col-md-6">
       <!--          <h4>อัตราส่วนระหว่างเพศ</h4>
                <hr/> -->
                <div id="piechart" style="width: 500px; height: 350px;"></div>
            </div>
            <div class="col-md-6">
              <h4>จำนวนวัยผู้ป่วย</h4>
              <hr/>
             
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <h4>จังหวัดที่พบผู้ป่วยมาก</h4>
              <hr/>
               <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>จังหวัด</th>
                    <th>จำนวน(คน)</th>
                    <th>เปอร์เซนต์(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>กรุงเทพ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>กระบี่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ชุมพร</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ชลบุบรี</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>สมุทรปราการ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <h4>เปรียบเทียบผู้ป่วย5ภาค</h4>
              <hr/>

            </div>
          </div>

      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){
        $('#disease-select').change(function(){
          //alert("test");
          //$('body').scrollTo($('#list-disease2'));
          var id = $('#disease-select').val();
          $('#list-disease'+id).ScrollTo();
        });


    });
</script>
<!-- google chart -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['เพศ', 'จำนวนผู้ป่วย'],
          ['ชาย',     11],
          ['หญิง',     8]
        ]);


        var options = {
          title: 'อัตราส่วนระหว่างเพศ',
          width:'500',
          height:'400'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        //var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
        //chart1.draw(data, options);
      }
    </script>

<?php	include('footer.php');?>