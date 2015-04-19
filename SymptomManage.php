<?php $title = "รายการลักษณะอาการ";?>
<?php include('header.php');?>
<?php include('subheader_symptom.php');?>

<?php if(isset($_SESSION['userID'])) { ?>
  <?php
    include('connectAzure.php');
    //*** Add Condition ***//
    if(isset($_POST["hdnCmd"])){
      if($_POST["hdnCmd"] == "Add")
      {
      	$strSQL = "INSERT INTO symptom ";
      	$strSQL .="(name,flowNumber,partOfBody) ";
      	$strSQL .="VALUES ";
      	$strSQL .="('".$_POST["txtAddName"]."','".$_POST["txtAddFlowNumber"]."','".$_POST["txtAddPartOfBody"]."')";
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
      	$strSQL = "UPDATE symptom SET ";
      	
      	$strSQL .="name = '".$_POST["txtEditName"]."' ";
      	$strSQL .=",flowNumber = '".$_POST["txtEditFlowNumber"]."' ";
      	$strSQL .=",partOfBody = '".$_POST["txtEditPartOfBody"]."' ";
      	$strSQL .="WHERE symptomID = '".$_POST["txtEditsymptomID"]."' ";
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
      	$strSQL = "DELETE FROM symptom ";
      	$strSQL .="WHERE symptomID = '".$_GET["SymID"]."' ";
      	$objQuery = mysql_query($strSQL);
      	if(!$objQuery)
      	{
      		echo "Error Delete [".mysql_error()."]";
      	}
      }
    }

    $strSQL = "SELECT * FROM symptom";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  ?>


  

  <div class="container">
    <h2>รายการลักษณะอาการ</h2>
    <hr/>
    <form name="symptomMN" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <input type="hidden" name="hdnCmd" value="">
      <table id="test" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th > <div align="center">Symptom ID </div></th>
          <th > <div align="center">Symptom Name </div></th>
          <th > <div align="center">Flow Number</div></th>
          <th > <div align="center">Part Of Body</div></th>
          <th > <div align="center">Edit </div></th>
          <th > <div align="center">Delete </div></th>
        </tr>
        </thead>
        <tbody>
    <?php
      while($objResult = mysql_fetch_array($objQuery))
      {
    ?>
      
      <?php
      if(isset($_GET["SymID"]) and isset($_GET["Action"])){
      	if($objResult["symptomID"] == $_GET["SymID"] and $_GET["Action"] == "Edit")
      	{
      ?>
      <tr>
          <td><div align="center">
      		<input type="hidden" name="txtEditsymptomID" size="5" value="<?php echo $objResult["symptomID"];?>"><?php echo $objResult["symptomID"];?></td>
          <td><input type="text" name="txtEditName" class="form-control" autofocus value="<?php echo $objResult["name"];?>"></td>
          <td><input type="text" name="txtEditFlowNumber" class="form-control" value="<?php echo $objResult["flowNumber"];?>"></td>
          <td>   
            <select name = "txtEditPartOfBody" class="selectpicker">
              <option value = "head" <?php if($objResult["partOfBody"]=="head") echo "selected";?> >Head</option>
              <option value = "body" <?php if($objResult["partOfBody"]=="body") echo "selected";?> >Body</option>
              <option value = "arm_leg" <?php if($objResult["partOfBody"]=="arm_leg") echo "selected";?>>Arm / Leg</option>
              <option value = "skin" <?php if($objResult["partOfBody"]=="skin") echo "selected";?>>Skin</option>
            </select>
          </td>
          <td colspan="2" align="right"><div align="center">
            <input name="btnUpdate" class="btn btn-info" type="button" id="btnUpdate" value="Update" OnClick="symptomMN.hdnCmd.value='Update';symptomMN.submit();">
            <input name="btnCancel" class="btn btn-default" type="button" id="btnCancel" value="Cancel" OnClick="window.location='<?php echo $_SERVER["PHP_SELF"];?>';">
          </div></td>
          <td style="display:none;"></td>
      </tr> 
      <?php
      	}
        else{
      ?>
        <tr>
          <td><div align="center"><?php echo $objResult["symptomID"];?></div></td>
          <td><?php echo $objResult["name"];?></td>
          <td><?php echo $objResult["flowNumber"];?></td>
          <td><div align="center"><?php echo $objResult["partOfBody"];?></div></td>
          <td align="center"><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&SymID=<?php echo $objResult["symptomID"];?>">Edit</a></td>
          <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&SymID=<?php echo $objResult["symptomID"];?>';}">Delete</a></td>
        </tr>
        <?php
        }// Else of have GET variable
      }//isset GET Variable
      else// Don't have GET variable
      {
      ?>
   
        <tr>
          <td><div align="center"><?php echo $objResult["symptomID"];?></div></td>
          <td><?php echo $objResult["name"];?></td>
          <td><?php echo $objResult["flowNumber"];?></td>
          <td><div align="center"><?php echo $objResult["partOfBody"];?></div></td>
          <td align="center"><a href="<?php echo $_SERVER["PHP_SELF"];?>?Action=Edit&SymID=<?php echo $objResult["symptomID"];?>">Edit</a></td>
      	  <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&SymID=<?php echo $objResult["symptomID"];?>';}">Delete</a></td>
        </tr>
      
      <?php
      	 }
      ?>
    <?php
     
    }
    ?>
        <tr>
          <td><div align="center"><input type= "hidden" name="txtAddsymptomID" size="5"></div></td>
          <td><input type="text" name="txtAddName" class="form-control"></td>
          <td><input type="text" name="txtAddFlowNumber" class="form-control"></td>
          <td>
            <select name = "txtAddPartOfBody" class="selectpicker">
              <option value = "head">Head</option>
              <option value = "body">Body</option>
              <option value = "arm_leg">Arm / Leg</option>
              <option value = "skin">Skin</option>
            </select>
          </td>
          <td colspan="2" align="right">
            <div align="center">
              <input name="btnAdd" type="button" id="btnAdd" value="Add" class="btn btn-success" OnClick="symptomMN.hdnCmd.value='Add';symptomMN.submit();">
            </div>
          </td>
          <td style="display:none;"></td>
        </tr>
        </tbody>
      </table>
    </form>
  </div><!--container-->
    <?php
    mysql_close($objConnect);

}//Session
    ?>

<script>
$(document).ready(function(){
  $('#test').dataTable({
    "iDisplayLength": 25
  });

});
</script>
<?php include('footer.php');?>
