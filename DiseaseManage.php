<?php include('header.php');?>
<?php include('subheader_disease.php');?>
<?php if(isset($_SESSION['userID'])) { ?>
	<?php
     include('connectAzure.php'); 
?>
<?php
	//*** Add Condition ***//
    if(isset($_POST["hdnCmd"])){
      if($_POST["hdnCmd"] == "Add")
      {
      	$strSQL = "INSERT INTO disease ";
      	$strSQL .="(name) ";
      	$strSQL .="VALUES ";
      	$strSQL .="('".$_POST["txtAddName"]."')";
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
      	$strSQL = "UPDATE disease SET ";
      	
      	$strSQL .="name = '".$_POST["txtEditName"]."' ";
      	$strSQL .="WHERE diseaseID = '".$_POST["txtEditdiseaseID"]."' ";
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
      	$strSQL = "DELETE FROM disease ";
      	$strSQL .="WHERE diseaseID = '".$_GET["DisID"]."' ";
        $strSQLdelTreat = "DELETE FROM treatment WHERE diseaseID =".$_GET["DisID"];
      	$objQuery = mysql_query($strSQL);
        $objQuerydelTreat = mysql_query($strSQLdelTreat);
      	if(!$objQuery)
      	{
      		echo "Error Delete [".mysql_error()."]";
      	}
        if(!$objQuerydelTreat)
        {
          echo "Error Delete [".mysql_error()."]";
        }
      }
    }

    $strSQL = "SELECT * FROM disease";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

	?>

  

  <div class="container">
	<h1>Disease List</h1>
	<form name = "diseaseMN" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
		<input type="hidden" name="hdnCmd" value="">
		<table id="test" class="table table-bordered table-hover">
      <thead>
			<tr>
				<th style="width: 10%;"><div align="center">Disease ID</div></th>
				<th><div align="center">Disease Name</div></th>
				<th style="width: 10%;"><div align="center">Edit</div></th>
				<th style="width: 10%;"><div align="center">Delete</div></th>
			</tr>
      </thead>
      <tbody>
	<?php
		while ($objResult = mysql_fetch_array($objQuery)) {
			
	?>
	<?php
	//Check Edit Mode
      if(isset($_GET["DisID"]) and isset($_GET["Action"])){
      	if($objResult["diseaseID"] == $_GET["DisID"] and $_GET["Action"] == "Edit")
      	{
      ?>
			<tr>
				
				<td><input name = "txtEditdiseaseID" type = "hidden" value = "<?php echo $objResult['diseaseID'];?>"><?php echo $objResult['diseaseID'];?></td>
				<td><input name = "txtEditName" type = "text" class="form-control" autofocus value ="<?php echo $objResult['name'];?>"></td>
				<td colspan="2" align="right"><div align="center">
            <input name="btnUpdate" class="btn btn-info" type="button" id="btnUpdate" value="Update" OnClick="diseaseMN.hdnCmd.value='Update';diseaseMN.submit();">
           	<input name="btnCancel" class="btn btn-default" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';">
        </div></td>
        <td style="display:none;"></td>
			</tr>
	<?php
      	}//Edit Mode
        else{//if not edit mode but have Get Variable
      ?>
      	<tr>
			<td><?php echo $objResult['diseaseID'];?></td>
			<td><a href = "TreatmentManage.php?diseaseID=<?php echo $objResult['diseaseID'];?>&diseaseName=<?php echo $objResult['name'];?>" > <?php echo $objResult['name'];?></a></td>
			<td><a href = "<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&DisID=<?php echo $objResult["diseaseID"];?>">Edit</a></td>
			<td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&DisID=<?php echo $objResult["diseaseID"];?>';}">Delete</a></td>
      
		</tr>
	<?php
        }// Else of have GET variable
      }//isset GET Variable
      else// Don't have GET variable
      {
      ?>
		<tr>
			<td><?php echo $objResult['diseaseID'];?></td>
			<td><a href = "TreatmentManage.php?diseaseID=<?php echo $objResult['diseaseID'];?>&diseaseName=<?php echo $objResult['name'];?>" > <?php echo $objResult['name'];?></a></td>
			<td><a href = "<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&DisID=<?php echo $objResult["diseaseID"];?>">Edit</a></td>
			<td><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&DisID=<?php echo $objResult["diseaseID"];?>';}">Delete</a></td>

		</tr>
		<?php
      	 }
      ?>
    <?php
     
    }
    ?>
        <tr>
          <td><input type= "hidden" name="txtAddDiseaseID" ></td>
          <td><input type="text" class="form-control" name="txtAddName"></td>
          <td colspan="2" align="right">
            <div align="center">
              <input name="btnAdd" type="button" class="btn btn-success" id="btnAdd" value="Add" OnClick="diseaseMN.hdnCmd.value='Add';diseaseMN.submit();">
            </div>
          </td>
          <td style="display:none;"></td>
        </tr>
      </tbody>
      </table>
	</form>
	</div><!-- container -->
	<?php
		mysql_close($objConnect);
  }//Session
	?>

<script>
$(document).ready(function(){
  $('#test').dataTable();

});
</script>
	<!-- 	<textarea style = "resize:none;"></textarea> -->
	<!-- 	<input type = "button" value = "Add" onClick="parent.location='SymptomManage.php'"> -->
<?php include('footer.php');?>