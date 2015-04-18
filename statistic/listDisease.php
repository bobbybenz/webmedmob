<?php
	$title = "รายการโรค";
	include('header.php');
	//include('<subheader_disease class="php"></subheader_disease>');
?>
  <div id="wrapper">
      <a href="#list-disease3">test</a>
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
              <li class="active">
                  <a href="#">Table</a>
              </li>
              <li>
                  <a href="#">Overview</a>
              </li>
              <li>
                  <a href="#">Events</a>
              </li>
              <li>
                  <a href="#">About</a>
              </li>
              <li>
                  <a href="#">Services</a>
              </li>
              <li>
                  <a href="#">Contact</a>
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
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <select id="disease-select" style="margin-top: 25px;" class="form-control">
              <option value = "โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ">โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</option>
              <option value = "โรคระบบทางเดินอาหารและโรคติดต่อโดนทางเดินอาหาร">โรคระบบทางเดินอาหารและโรคติดต่อโดนทางเดินอาหาร</option>
              <option value = "โรคระบบประสาทและสมอง">โรคระบบประสาทและสมอง</option>
              <option value = "โรคระบบไหลเวียนโลหิตและโรคเลือด">โรคระบบไหลเวียนโลหิตและโรคเลือด</option>
              <option value = "โรคระบบกระดูกและกล้ามเนื้อ">โรคระบบกระดูกและกล้ามเนื้อ</option>
              <option value = "โรคระบบต่อมไร้ท่อและโภชนาการ">โรคระบบต่อมไร้ท่อและโภชนาการ</option>
              <option value = "โรคระบบทางเดินปัสสาวะ">โรคระบบทางเดินปัสสาวะ</option>
              <option value = "โรคระบบอวัยวะสืบพันธุ์ชาย">โรคระบบอวัยวะสืบพันธุ์ชาย</option>
              <option value = "โรคระบบอวัยวะสืบพันธุ์หญิงและการตั้งครรภ์">โรคระบบอวัยวะสืบพันธุ์หญิงและการตั้งครรภ์</option>
              <option value = "โรคหู">โรคหู</option>
              <option value = "โรคตา">โรคตา</option>
              <option value = "โรคผิวหนัง">โรคผิวหนัง</option>
              <option value = "โรคติดต่อทางเพศสัมพันธ์">โรคติดต่อทางเพศสัมพันธ์</option>
              <option value = "โรคที่เกิดจากอุบัติเหตุ สารพิษ และสัตว์พิษ">โรคที่เกิดจากอุบัติเหตุ สารพิษ และสัตว์พิษ</option>
              <option value = "โรคติดเชื้อ">โรคติดเชื้อ</option>
              <option value = "โรคพยาธิ">โรคพยาธิ</option>
              <option value = "โรคมะเร็ง">โรคมะเร็ง</option>
              <option value = "โรคติดเชื้ออุบัติใหม่">โรคติดเชื้ออุบัติใหม่</option>
            </select>
            </div>
          </div>
          
          <hr style="border: 3px outset #595955;">
        
          <div class="row" id="list-disease">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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
          <div class="row" id="">
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

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function(){
        $('#disease-select').change(function(){
          alert("test");

        });


    });
</script>

<?php	include('footer.php');?>