<?php include('header.php'); ?>


	<?php
		include('connectAzure.php');
		//*** Add Condition ***//
	    if(isset($_POST["hdnCmd"])){
	      if($_POST["hdnCmd"] == "Add")
	      {
	      	$strSQL = "INSERT INTO treatment ";
	      	$strSQL .="(diseaseID,detail) ";
	      	$strSQL .="VALUES ";
	      	$strSQL .="('".$_GET['diseaseID']."','".$_POST["txtAddDetail"]."')";
	      	$objQuery = mysql_query($strSQL);
	      	if(!$objQuery)
	      	{
	      		echo "Error Save [".mysql_error()."]";
	      	}
	      }
	    }

	    //*** Update Condition ***//
	    if(isset($_POST["hdnCmd"])){
	      if($_POST["hdnCmd"] == "Update")
	      {
	      	$strSQL = "UPDATE treatment SET ";
	      	
	      	$strSQL .="detail = '".$_POST["txtEditDetail"]."' ";
	      	$strSQL .="WHERE treatmentID = '".$_POST["txtEditTreatmentID"]."' ";
	      	$objQuery = mysql_query($strSQL);
	      	if(!$objQuery)
	      	{
	      		echo "Error Update [".mysql_error()."]";
	      	}
	      }
	    }
	    //*** Delete Condition ***//
	    if(isset($_GET["Action"])){
	      if($_GET["Action"] == "Del")
	      {
	      	$strSQL = "DELETE FROM treatment ";
	      	$strSQL .="WHERE treatmentID = '".$_GET["TreID"]."' ";
	      	$objQuery = mysql_query($strSQL);
	      	if(!$objQuery)
	      	{
	      		echo "Error Delete [".mysql_error()."]";
	      	}
	      }
	    }

	    //Have data
	    if(isset($_GET["diseaseID"])){

	    	$strSQL = "SELECT * FROM treatment AS t JOIN disease AS d ON t.diseaseID = d.diseaseID WHERE t.diseaseID = ".$_GET["diseaseID"];
    		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    		$DiseaseName = $_GET["diseaseName"];
    		

 	?>
 	<?php include('subheader_disease.php');?>
 	<div class="container">
 	<h2>ข้อแนะนำการรักษา : <i>โรค<?php echo $DiseaseName;?></i></h2>
	<hr/>
	

	<!-- <h1>Treatment List</h1> -->
	<form name = "treatmentMN" method="post" action="<?php echo $_SERVER["PHP_SELF"]."?diseaseID="
	.$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>">
		<input type="hidden" name="hdnCmd" value="">
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<th><div align="center">Treatment ID</div></th>
				<th><div align="center">Disease ID</div></th>
				<th width="400px" ><div align="center">Detail</div></th>
				<th><div align="center">Edit</div></th>
				<th><div align="center">Delete</div></th>
			</tr>
			</thead>
			<tbody>
				
		
	<?php
		while ($objResult = mysql_fetch_array($objQuery)) {
			
	?>
	<?php
	//Check Edit Mode
      if(isset($_GET["TreID"]) and isset($_GET["Action"])){
      	if($objResult["treatmentID"] == $_GET["TreID"] and $_GET["Action"] == "Edit")
      	{
      ?>
			<tr>
				
				<td><input name = "txtEditTreatmentID" type = "hidden" value = "<?php echo $objResult['treatmentID'];?>"><?php echo $objResult['treatmentID'];?></td>
				<td><input name = "txtEditDiseaseID" type = "hidden" value = "<?php echo $objResult['diseaseID'];?>"><?php echo $objResult['name'];?></td>
				<td>
					<div class="form-group">
						<textarea style="resize:none;height:85px;width:400px;" name ="txtEditDetail" class="form-control" rows="4"><?php echo $objResult['detail'];?>
						</textarea>
					</div>
						<!-- <input name = "txtEditDetail" type = "text" value ="<?php echo $objResult['detail'];?>"> -->
				</td>
				<td colspan="2" align="right"><div align="center">
            		<input name="btnUpdate" class="btn btn-info" type="button" id="btnUpdate" value="Update" OnClick="treatmentMN.hdnCmd.value='Update';treatmentMN.submit();">
           	 		<input name="btnCancel" class="btn btn-default" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"]."?diseaseID=".$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>';">
          		</div></td>
			</tr>
	<?php
      	}//Edit Mode
        else{//if not edit mode but have Get Variable
      ?>
      	<tr>
			<td><?php echo $objResult['treatmentID'];?></td>
			<td><?php echo $objResult['diseaseID'];?></td>
			<td><?php echo $objResult['detail'];?></td>
			<td><a href = "<?php echo $_SERVER["PHP_SELF"]."?diseaseID=".$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>&Action=Edit&TreID=<?php echo $objResult["treatmentID"];?>">Edit</a></td>
			<td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='
				<?php echo $_SERVER["PHP_SELF"]."?diseaseID=".$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>&Action=Del&TreID=<?php echo $objResult["treatmentID"];?>';}">Delete</a></td>

		</tr>
	<?php
        }// Else of have GET variable
      }// isset($_GET["TreID"]) and isset($_GET["Action"]
      else// Don't have GET variable
      {
      ?>
		<tr>
			<td><?php echo $objResult['treatmentID'];?></td>
			<td><?php echo $objResult['diseaseID'];?></td>
			<td><?php echo $objResult['detail'];?></td>
			<td><a href = "<?php echo $_SERVER["PHP_SELF"]."?diseaseID=".$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>&Action=Edit&TreID=<?php echo $objResult["treatmentID"];?>">Edit</a></td>
			<td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='
				<?php echo $_SERVER["PHP_SELF"]."?diseaseID=".$_GET['diseaseID']."&diseaseName=".$_GET['diseaseName'];?>&Action=Del&TreID=<?php echo $objResult["treatmentID"];?>';}">Delete</a></td>

		</tr>
		<?php
      	 }
      ?>
    <?php
     
    }//while ($objResult = mysql_fetch_array($objQuery))
    ?>
        <tr>
          <td><input type= "hidden" name="txtAddTreatmentID" ></td>
          <td><input type= "hidden" name="txtAddDiseaseID" ></td>
          <td><textarea style="height:85px;width:400px;" name = "txtAddDetail" class="form-control" rows="4"></textarea></td>
          <!-- <td><input type="text" name="txtAddDetail"></td> -->
          <td colspan="2" align="right">
            <div align="center">
              <input name="btnAdd" class="btn btn-success" type="button" id="btnAdd" value="Add" OnClick="treatmentMN.hdnCmd.value='Add';treatmentMN.submit();">
            </div>
          </td>
        </tr>
    	</tbody>
      </table>
	</form>
	
	<?php
		mysql_close($objConnect);
	}//Have get Variable----- if(isset($_GET["diseaseID"]))
	else{ // Don't Have ID
    ?>
		<h1>Don't Have Detail2</h1>
    <?php

    }//else Don't Have ID
	?>
	
	<input class="btn btn-default" type = "button" value ="<<Back" Onclick = "location.href ='DiseaseManage.php'">
	</div><!-- container -->
	



<?php include('footer.php')?>