<?php $title = "เพิ่มโหนดราก";?>
<?php include('header.php');?>
<?php include('subheader_symptomNode.php');?>
<?php
    // $DB_HOST = "localhost";
    // $DB_USER = "root";
    // $DB_PASS = "";
    // $DB_NAME = "medmobdb";

    // $objConnect = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
    // $objDB = mysql_select_db($DB_NAME) or die("Couldn't select database");
    // mysql_query("SET NAMES UTF8");
    include('connectAzure.php');
    $strSQL = "SELECT * FROM Symptom WHERE symptomID=".$_GET['symptomID'];
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $objResult = mysql_fetch_array($objQuery);

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<form method="POST" id="form-add-node" action="SymptomNodeCompute.php">
		  <div class="form-group">
		  	<input type="hidden" name="hidTypeNode" value="rootNode">
		  	<input type="hidden" name="hidAddRoot" value="addRoot">
		  	<input type="hidden" name="hidSymptomID" value="<?php echo $objResult['symptomID'];?>">
		    <label for="systomNameTxt">Symptom Name</label>
		    <input type="text" readonly class="form-control" id="systomNameTxt" value="<?php echo $objResult['name'];?>">
		  </div>
		  <div class="form-group">
		    <label for="questionTxt">Question</label>
		    <!-- <input type="text" class="form-control" id="questionTxt" name="questionTxt"> -->
		    <textarea class="form-control" id="questionTxt" name="questionTxt" row="2"></textarea>
		  </div>

	 	  <div class="checkbox">
		  	<label>
			<!-- <input class="have-addition-data" type = "checkbox" name = "chkAdditionData">Have Addition Data
			</label>
			<div id="type-addition-data">
				Type Addition Data: 
				<select name="slcTypeAdditionData">
					<option>อุณหภูมิ</option>
					<option>ความดัน</option>
					<option>เพศชาย</option>
					<option>เพศหญิง</option>
					<option>ชีพจร</option>
				</select>
			</div><!-- type-addition-data -->
			<input class="have-addition-data" type = "checkbox" name = "chkAdditionData">ข้อมูลเพิ่มเติม
			<br>
			<div id="type-addition-data">
				ประเภทของข้อมูลเพิ่มเติม: 
				<select name="slcTypeAdditionData" class="selectpicker">
					<option>อุณหภูมิ</option>
					<option>ความดัน</option>
					<option>เพศชาย</option>
					<option>เพศหญิง</option>
					<option>ชีพจร</option>	
				</select>
			</div><!-- End: type-addition-data -->
		  </div><!-- checkbox -->


		  <input type="button" class="btn btn-success" value="เพิ่ม" onclick="questionCheck();">
		  <input type = "button" class="btn btn-danger" value ="Back" Onclick = "location.href ='SymptomNodeShow.php'">
		</form>
		</div>
	</div>
	
</div><!-- container -->

<script>
	$(document).ready(function(){
		$('#type-addition-data').hide();
		$('.have-addition-data').click(function(){
			if($('.have-addition-data').prop('checked')){
				$('#type-addition-data').show();
			}else{
				$('#type-addition-data').hide();
			}
		});

		$('#questionTxt').focus();
	});

	function questionCheck(){
		if($('#questionTxt').val() == ""){
			alert("กรุณาเพิ่มข้อมูลคำถาม");
		}else{
			$('form#form-add-node').submit();
		}
	}
</script>
<?php include('footer.php');?>