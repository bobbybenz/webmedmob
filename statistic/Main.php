<?php
	$title = "Main";
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
                  <a href="#">Main</a>
              </li>
              <li>
                  <a href="listDisease.php">Table</a>
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

      <!-- Page Content -->
<!--       <div id="page-content-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <h1>Simple Sidebar</h1>
                      <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                      <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                  </div>
              </div>
          </div>
      </div> -->
      <!-- /#page-content-wrapper -->
      <div id="page-content-wrapper">
        <div class="container">
          <h2>แสดงแนวโน้มของโรคตามระบบในแต่ละภาค</h2>
          <hr style="border: 3px outset #595955;">
          <div class="row" id="filter-row">
            <div class="col-md-6">
              <select class="selectpicker">
                <option value="a">a</option>
                <option value="a">a</option>
              </select>
            </div><!-- col-md-6 -->
            
            <div class="col-md-6">
              <select class="selectpicker">
                <option value="a">a</option>
                <option value="a">a</option>
              </select>
              <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
            </div>
          </div><!-- filter-row -->
          
          <h3>ภาคกลาง</h3>
          <hr/>
          <div class="row" id="trend-chart-central">   
            <div class="col-md-7">
             <div id="curve_chart" style="width: 720px; height: 400px"></div>
            </div>
            <div class="col-md-5">
              <h4>Top List</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>โรคที่พบมาก</th>
                    <th>จำนวน(คน)</th>
                    <th>เปอร์เซนต์(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- trend-chart-central -->
          
          <h3>ภาคเหนือ</h3>
          <hr/>
          <div class="row" id="trend-chart-north">
            
            <div class="col-md-7">
             <div id="curve_chart1" style="width: 720px; height: 400px"></div>
            </div>
            <div class="col-md-5">
              <h4>Top List</h4>
                    <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>โรคที่พบมาก</th>
                    <th>จำนวน(คน)</th>
                    <th>เปอร์เซนต์(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>ไข้หวัดใหญ่</td>
                    <td>10</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div><!-- trend-chart-central -->



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