<?php
	$title = "Area";
	include('header.php');
	//include('<subheader_disease class="php"></subheader_disease>');
?>
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

      <!-- /#page-content-wrapper -->
      <div id="page-content-wrapper">
        <div class="container">
          <h2>แสดงโรคในแต่ละจังหวัด</h2>
          <hr style="border: 3px outset #595955;">
          <div class="row" id="filter-row">
            <div class="col-md-6">
              <select id="provinceId" class="form-control">
                  <option selected="">เลือกจังหวัด</option>
                  <option value="81">กระบี่</option>
                  <option value="71">กาญจนบุรี</option>
                  <option value="46">กาฬสินธุ์</option>
                  <option value="62">กำแพงเพชร</option>
                  <option value="40">ขอนแก่น</option>
                  <option value="22">จันทบุรี</option>
                  <option value="24">ฉะเชิงเทรา</option>
                  <option value="20">ชลบุรี</option>
                  <option value="18">ชัยนาท</option>
                  <option value="36">ชัยภูมิ</option>
                  <option value="86">ชุมพร</option>
                  <option value="92">ตรัง</option>
                  <option value="23">ตราด</option>
                  <option value="63">ตาก</option>
                  <option value="26">นครนายก</option>
                  <option value="73">นครปฐม</option>
                  <option value="48">นครพนม</option>
                  <option value="30">นครราชสีมา</option>
                  <option value="80">นครศรีธรรมราช</option>
                  <option value="60">นครสวรรค์</option>
                  <option value="96">นราธิวาส</option>
                  <option value="55">น่าน</option>
                  <option value="38">บึงกาฬ</option>
                  <option value="31">บุรีรัมย์</option>
                  <option value="13">ปทุมธานี</option>
                  <option value="77">ประจวบคีรีขันธ์</option>
                  <option value="25">ปราจีนบุรี</option>
                  <option value="94">ปัตตานี</option>
                  <option value="14">พระนครศรีอยุธยา</option>
                  <option value="56">พะเยา</option>
                  <option value="82">พังงา</option>
                  <option value="93">พัทลุง</option>
                  <option value="66">พิจิตร</option>
                  <option value="83">ภูเก็ต</option>
                  <option value="44">มหาสารคาม</option>
                  <option value="49">มุกดาหาร</option>
                  <option value="95">ยะลา</option>
                  <option value="35">ยโสธร</option>
                  <option value="45">ร้อยเอ็ด</option>
                  <option value="85">ระนอง</option>
                  <option value="21">ระยอง</option>
                  <option value="70">ราชบุรี</option>
                  <option value="16">ลพบุรี</option>
                  <option value="52">ลำปาง</option>
                  <option value="51">ลำพูน</option>
                  <option value="33">ศรีสะเกษ</option>
                  <option value="47">สกลนคร</option>
                  <option value="90">สงขลา</option>
                  <option value="91">สตูล</option>
                  <option value="11">สมุทรปราการ</option>
                  <option value="75">สมุทรสงคราม</option>
                  <option value="74">สมุทรสาคร</option>
                  <option value="19">สระบุรี</option>
                  <option value="27">สระแก้ว</option>
                  <option value="17">สิงห์บุรี</option>
                  <option value="72">สุพรรณบุรี</option>
                  <option value="84">สุราษฎร์ธานี</option>
                  <option value="32">สุรินทร์</option>
                  <option value="64">สุโขทัย</option>
                  <option value="39">หนองบัวลำภู</option>
                  <option value="15">อ่างทอง</option>
                  <option value="37">อำนาจเจริญ</option>
                  <option value="41">อุดรธานี</option>
                  <option value="53">อุตรดิตถ์</option>
                  <option value="61">อุทัยธานี</option>
                  <option value="34">อุบลราชธานี</option>
                  <option value="57">เชียงราย</option>
                  <option value="50">เชียงใหม่</option>
                  <option value="76">เพชรบุรี</option>
                  <option value="67">เพชรบูรณ์</option>
                  <option value="42">เลย</option>
                  <option value="54">แพร่</option>
                  <option value="58">แม่ฮ่องสอน</option>          
              </select>

           <!--    <select class="selectpicker">
                <option value="a">a</option>
                <option value="a">a</option>
              </select> -->
            </div><!-- col-md-6 -->
            
            <div class="col-md-6">
              <select class="selectpicker">
                <option value="a">a</option>
                <option value="a">a</option>
              </select>
              <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
          </div><!-- filter-row -->
          
          <h3>ภาพรวมของกลุ่มโรค</h3>
          <hr/>
          <div class="row" id="trend-chart-central">   
            <div class="col-md-6">
             <div id="curve_chart" style="width: 720px; height: 400px"></div>
            </div>
             <div class="col-md-6">
             <div id="curve_chart1" style="width: 720px; height: 400px"></div>
            </div>
            
          </div><!-- trend-chart-central -->
          <div class="row"> 
            <div class="col-md-12">
              <h4>โรคที่พบบ่อย</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th style="text-align:center;">#</th>
                    <th style="text-align:center;">โรค</th>
                    <th style="text-align:center;">ประเภท</th>
                    <th style="text-align:center;">จำนวน(คน)</th>
                    <th style="text-align:center;">เปอร์เซนต์(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>โรคระบบตทางเดินหายใจและโรคติดต่อโดยทางเดินหายใจ</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <hr/>

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
    </script>


<script type="text/javascript"
          src="https://www.google.com/jsapi?autoload={
            'modules':[{
              'name':'visualization',
              'version':'1',
              'packages':['corechart']
            }]
          }"></script>

    <script type="text/javascript">
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'จำนวนคนป่วย'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030],
          ['2008',  1030]
        ]);
        var disease ="โรคติดต่อพิเศษ"
        var options = {
          title: 'แนวโน้ม'+disease,
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
        var chart1 = new google.visualization.LineChart(document.getElementById('curve_chart1'));
        chart1.draw(data, options);
      }
    </script>
<?php	include('footer.php');?>