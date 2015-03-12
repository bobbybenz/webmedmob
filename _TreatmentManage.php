<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Disease Detail</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$DB_HOST = "localhost";
	    $DB_USER = "root";
	    $DB_PASS = "";
	    $DB_NAME = "medmobdb";

	    $objConnect = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
	    $objDB = mysql_select_db($DB_NAME) or die("Couldn't select database");
	    //$objDB = mysql_select_db("thaicreatedb");
	    mysql_query("SET NAMES UTF8");

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

    		//get data to array
    		$result_list = array();
    		while ($objResult = mysql_fetch_array($objQuery)) {
    			# code...
    			$result_list[] = $objResult;
    		}

    		$checkData = count($result_list);
    		if($checkData >0){
    ?>


    	<h1>โรค: </h1><?php echo $result_list[0]["name"]?>
    	<h2>คำแนะนำ</h2>
    	<table >
    		

   
	<?php

			$i = 1;
			foreach ($result_list as $results) {
				# code...
	?>
				<tr>
					<td><?php echo $i;?> : </td>
					<td><?php echo $results['detail']?></td>
				</tr>
				
	<?php
				$i++;
			}
	?>
	   	</table>
	   	<input type = "button" value ="Edit" Onclick = "parent.location='DiseaseEdit.php'">
	<?php
		}//check data if Hava Treatment Data
		else{
			echo "<h1>Don't Have Detail</h1>";
		}
	}//Have get Variable
	    else{ // Don't Have ID
	    ?>
			<h1>Don't Have Detail</h1>
	    <?php

	    }

	?>
	
	<input type = "button" value ="Back" Onclick = "location.href ='DiseaseManage.php'">
</body>
</html>