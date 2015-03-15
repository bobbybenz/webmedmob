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
	
	insertPatientData($gender,$age,$height,$weight,$bmi,$bloodPressure,$congenitalDisease,$latitude,$longitude);
	$Newid = mysql_insert_id();//Ner patient ID after INSERT data
	echo $Newid."<br>";
	insertPatientDisease($Newid,2,"เทส");
	insertPatientSymptom($Newid,1,"อาการ");
	returnJsonPatientData();



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