<?php
	include('connectAzure.php');
	//Get data from Android
	$gender ="ชาย";
	$age=12;
	$height=145;
	$weight=124;
	$bmi=123;
	$bloodPressure="123/80";
	$congenitalDisease="None";
	$latitude =1123445.134;
	$longitude=123455.13;
	$jsonPDisease;
	$jsonPSymptom;

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

	$arr[0]["CustomerID"]="C001";
	$arr[0]["Name"]="Weerachai Nukitram";
	$arr[0]["Email"]="win.weerachai@thaicreate.com";
	$arr[1]["CustomerID"]="C002";
	$arr[1]["Name"]="Narut Saekow";
	$arr[1]["Email"]="landbenz@hotmail.com";
	$arr[2]["CustomerID"]="C003";
	$arr[2]["Name"]="aaaa";
	$arr[2]["Email"]="aaaa@hotmail.com";

	$jsonstr = json_encode($arr);
	echo $jsonstr;

	// $objPDisease = json_decode($jsonstr,true);
	// $objPSymptom = json_decode($jsonstr,true);
	$objJsonArray = json_decode($jsonstr,true);
	print_r($objJsonArray);
	foreach ($objJsonArray as $arrs) {
		echo "<br>---".$arrs["CustomerID"];
		echo "<br>---".$arrs["Name"];
		echo "<br>---".$arrs["Email"];
		echo "<br>-------------------------------------<br>";
	}





	//insertPatientData($gender,$age,$height,$weight,$bmi,$bloodPressure,$congenitalDisease,$latitude,$longitude);
	//$Newid = mysql_insert_id();//Ner patient ID after INSERT data
	//echo $Newid."<br>";
	// foreach ($objJsonArray as $arrs) {
	// 	$symptomID = $arrs[""];
	// 	$symptomName = $arrs[""];
	// 	insertPatientSymptom($Newid,$symptomID,$symptomName);
	// }

	// foreach ($objJsonArray as $arrs) {
	// 	$diseaseID = $arrs[""];
	// 	$diseaseName = $arrs[""];
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

	function returnJsonPatientData(){
	//Return json ----------------------------------------------
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