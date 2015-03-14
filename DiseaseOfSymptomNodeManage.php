<?php include('header.php'); ?>
<?php include('subheader.php');?>
	<?php
		echo $_GET['symptomNodeID'];
		echo $_GET['type'];
	?>

	<?php
		// $DB_HOST = "localhost";
	 //    $DB_USER = "root";
	 //    $DB_PASS = "";
	 //    $DB_NAME = "medmobdb";

	 //    $objConnect = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
	 //    $objDB = mysql_select_db($DB_NAME) or die("Couldn't select database");
	 //    //$objDB = mysql_select_db("thaicreatedb");
	 //    mysql_query("SET NAMES UTF8");
	include('connectAzure.php');
		//*** Add Condition ***//
	    if(isset($_POST["hdnCmd"])){
	      if($_POST["hdnCmd"] == "Add")
	      {
	      	$strSQL = "INSERT INTO diseaseofsymptom ";
	      	$strSQL .="(symptomNodeID,diseaseID) ";
	      	$strSQL .="VALUES ";
	      	$strSQL .="('".$_GET['symptomNodeID']."','".$_POST["txtAddDiseaseID"]."')";
	      	$objQuery = mysql_query($strSQL);
	      	if(!$objQuery)
	      	{
	      		echo "Error Save [".mysql_error()."]";
	      	}
	      }
	    }

	
	    //*** Delete Condition ***//
	    if(isset($_GET["Action"])){
	      if($_GET["Action"] == "Del")
	      {
	      	$strSQL = "DELETE FROM diseaseofsymptom ";
	      	$strSQL .="WHERE diseaseOfSymptomID = '".$_GET["DosID"]."' ";
	      	$objQuery = mysql_query($strSQL);
	      	if(!$objQuery)
	      	{
	      		echo "Error Delete [".mysql_error()."]";
	      	}
	      }
	    }
		//Have data
	    if(isset($_GET["symptomNodeID"])){

	    	$strSQL = "SELECT * FROM (diseaseofsymptom AS dos JOIN disease AS d ON dos.diseaseID = d.diseaseID) JOIN 
	    	symptomnode AS sn ON sn.symptomNodeID = dos.symptomNodeID WHERE dos.symptomNodeID = ".$_GET["symptomNodeID"]; 
	    	
    		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    		
    	

	 	?>
	<?php 	$strSQLSymptomNode = "SELECT * FROM symptomnode WHERE symptomNodeID=".$_GET['symptomNodeID'];
			$objQuerySymptomNode = mysql_query($strSQLSymptomNode);
			$result = mysql_fetch_array($objQuerySymptomNode);
			$symptomID = $result['symptomID'];
	?>

	 <div class="container">
		<h1>Symptom Node ID : <?php echo $_GET['symptomNodeID'];?></h1>
		
		<h2>Question: <?php echo $result['question'];?></h2>
		<h1>Disease Of Symptom Node List</h1>
		<form name = "dosMN" method="post" action="<?php echo $_SERVER["PHP_SELF"]."?symptomNodeID="
		.$_GET['symptomNodeID']."&type=".$_GET['type'];?>">
			<input type="hidden" name="hdnCmd" value="">
			<table class="table table-bordered table-hover">
				<tr>
					<td>Disease of symptom ID</td>
					<td>Disease ID</td>
					<td>Disease Name</td>
					<td>Delete</td>
				</tr>
		<?php
			while ($objResult = mysql_fetch_array($objQuery)) {
				
		?>
		
	    
	      	<tr>
				<td><?php echo $objResult['diseaseOfSymptomID'];?></td>
				<td><?php echo $objResult['diseaseID'];?></td>
				<td><?php echo $objResult['name'];?></td>
				<td><a href="JavaScript:
					if(confirm('Confirm Delete?')==true){
					window.location='
					<?php echo $_SERVER["PHP_SELF"]."?symptomNodeID=".$_GET['symptomNodeID']."&type=".$_GET['type'];?>&Action=Del&DosID=<?php echo $objResult['diseaseOfSymptomID'];?>';}">Delete</a>
				</td>
			</tr>
	
	    <?php
	     
	    }//while ($objResult = mysql_fetch_array($objQuery))
	    ?>
	        <tr>
	          <td><input type= "hidden" name="txtAddDosID" ></td>
	          <td><input type="text" name="txtAddDiseaseID" readonly id="disease-id-value"></td>
	          <!-- <td><textarea name = "txtAddDetail" ></textarea></td> -->

	          <td>
	          	<input type="text" name="txtAddDisease" readonly id="disease-value">
	          	<input type="button" value="..." data-toggle="modal" data-target="#list-of-disease-modal">
	          </td>
	          <td align="right">
	            <div align="center">
	              <input name="btnAdd" type="button" id="btnAdd" value="Add" OnClick="
	              	var chkID=document.getElementById('disease-id-value').value;
	              	if(chkID==''){
						alert('Please select Diease!!!');
					}else{
						dosMN.hdnCmd.value='Add';
						dosMN.submit();
					}
	              ">
	            </div>
	          </td>
	        </tr>
	      </table>
		</form>

		<?php
			
		}//Have get Variable----- if(isset($_GET["diseaseID"]))
		else{ // Don't Have ID
	    ?>
			<h1>Don't Have Detail2</h1>
	    <?php

	    }//else Don't Have ID"?
		?>
		<input type="button" value="Back" Onclick = "location.href ='SymptomNodeShow.php?symptomID=<?php echo $symptomID;?>'">
	</div><!-- container -->

	<!-- Modal -->
	<div class="modal fade" id="list-of-disease-modal" tabindex="-1" role="dialog" >
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Diseases List</h4>
	      </div>  <!-- modal-header -->
	      <div class="modal-body">
	        <table id="modal-table" class="table table-bordered table-hover">
	        	<thead>
	        		<tr>
	        			<th style="text-align: center;">ID</th>
	        			<th style="text-align: center;">Disease Name</th>
	        			<!-- <th>Remarks</th> -->
	        		</tr>
	        	</thead>
	        	<tbody>
	        <?php
	        	$strSQLDisease="SELECT * FROM disease";
	        	$objQueryDisease=mysql_query($strSQLDisease) or die ("Error Query [".$strSQLDisease."]");
	        	//$objQuery = mysql_query($strSQLDisease) or die ("Error Query [".$strSQLDisease."]");
	        	while ($objResultDisease=mysql_fetch_array($objQueryDisease)) {

	        		# code...
	        	
	        ?>
	        		<tr>
	        			<td style="text-align: center;">
	        				<a href="javascript:void(0);" class="choose-button"><?php echo 
	        				$objResultDisease['diseaseID']; ?></a>
	        			</td>
	        			<td class="<?php echo $objResultDisease['diseaseID']?> diseaseName"><?php echo $objResultDisease['name']; ?></td>
	        			<!-- <td class="001 remarks">none</td> -->
	        		</tr>
	        	<!-- 	<tr>
	        			<td>
	        				<a href="javascript:void(0);" class="choose-button">002</a>
	        			</td>
	        			<td class="002 diseaseName">Syndrome</td>
	        			<td class="002 remarks">-</td>
	        		</tr> -->

	        <?php
	        	}//while ($objResultDisease=mysql_fetch_array($objQueryDisease))
	        	mysql_close($objConnect);
	        ?>
	        	</tbody>
	        </table>
	      </div>  <!-- modal-body -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>  <!-- modal-footer -->
	    </div>
	  </div>
	</div>

<script>
$(document).ready(function(){
	//Modal
	$('.choose-button').click(function(){
		var id = $(this).html();
		var disease = $('.'+id+'.diseaseName').html();
		//var remarks = $('.'+id+'.remarks').html();
		$('#disease-id-value').val(id);
		$('#disease-value').val(disease);
		$('#list-of-disease-modal').modal('hide');
	});

	$('#modal-table').dataTable();
});
</script>

<?php include('footer.php'); ?>