<meta charset="utf-8">
<?php

	include('connectAzure.php');
	//Get data from Android
	// $gender =$_POST["gender"];
	// $age=$_POST["age"];
	// $height=$_POST["height"];
	// $weight=$_POST["weight"];
	// $bmi=$_POST["bmi"];
	// $bloodPressure=$_POST["bloodPressure"];
	// $congenitalDisease=$_POST["congenitalDisease"];
	// $latitude =$_POST["latitude"];
	// $longitude=$_POST["longitude"];
	// $jsonPDisease=$_POST["jsonPDisease"];
	// $jsonPSymptom=$_POST["jsonPSymptom"];

	// $objPDisease = json_decode($jsonPDisease,true);
	// $objPSymptom = json_decode($jsonPSymptom,true);
	// insertPatientData($gender,$age,$height,$weight,$bmi,$bloodPressure,$congenitalDisease,$latitude,$longitude);
	// $Newid = mysql_insert_id();//Ner patient ID after INSERT data
	// echo $Newid."<br>";
	// foreach ($objPSymptom as $arrs) {
	// 	$symptomID = $arrs["ID"];
	// 	$symptomName = $arrs["Data"];
	// 	insertPatientSymptom($Newid,$symptomID,$symptomName);
		
	// }
	// foreach ($objPDisease as $arrs) {
	// 	$diseaseID = $arrs["ID"];
	// 	$diseaseName = $arrs["Data"];
	// 	insertPatientDisease($Newid,$diseaseID,$diseaseName);
	// }


	//returnJsonPatientData();

	function insertPatientData($gender,$age,$height,$weight,$bmi,$bloodPressure,$congenitalDisease,$latitude,$longitude){
	$strSQLinsert = "INSERT INTO patientdata(gender, age,height,weight,bmi,bloodPressure,congenitalDisease,latitude,longitude) VALUES ('".$gender."','".$age."','".$height."','".$weight."','".$bmi."','".$bloodPressure."','".$congenitalDisease."','".$latitude."','".$longitude."')";
	$objQuery = mysql_query($strSQLinsert) or die ("Error Query [".$strSQLinsert."]");
	
	}

	function insertPatientDisease($dataID,$diseaseID,$diseaseName){
		$strSQLPD = "INSERT INTO patientdisease(dataID,diseaseID,diseaseName) VALUES ('".$dataID."','".$diseaseID."','".$diseaseName."')";
		$objQuery = mysql_query($strSQLPD) or die ("ERROR Query [".$strSQLPD."]");
	}

	function insertPatientSymptom($dataID,$symptomID,$symptomName){
		$strSQLPS = "INSERT INTO patientsymptom(dataID,symptomID,symptomName) VALUES('".$dataID."','".$symptomID."','".$symptomName."')";
		$objQuery = mysql_query($strSQLPS) or die ("ERROR Query [".$strSQLPS."]");
	}

	//Return json ----------------------------------------------
	function returnJsonPatientData(){
		$strSQL = "SELECT * FROM patientdata";

		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		$intNumField = mysql_num_fields($objQuery);
		$resultArray = array();
		while($obResult = mysql_fetch_array($objQuery))
		{
			$arrCol = array();
			for($i=0;$i<$intNumField;$i++)
			{
				$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
			} 
			array_push($resultArray,$arrCol);
		
		}
		echo json_encode($resultArray);
	}

	
	mysql_close($objConnect);
?>