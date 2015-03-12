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
if(isset($_POST['hidTypeNode'])){

    echo $symptomID=$_POST['hidSymptomID'];

    //Come from Hava data Node. This node is a Root Node and link from another Symptom
    if(isset($_POST['rootNode'])){
    	//Come from Hava data Node. This node is a Root Node and link from another Symptom
    	echo $isRoot = 1;
    }
    else{
    	echo $isRoot=0;
    }
 
    if($_POST['hidTypeNode']=="yesNode"){
    	echo $isYesNode=1;
    	echo $isNoNode=0;
    }
    else if($_POST['hidTypeNode']=="noNode"){
    	echo $isYesNode=0;
    	echo $isNoNode=1;
    }//The first Node (Root Node) of Symptom
    else if($_POST['hidTypeNode']=="rootNode"){
    	echo $isRoot=1;
    	echo $isYesNode=0;
    	echo $isNoNode=0;
    }
    echo "<br> TEST:".$_POST['chkAddNewType']."<br>";

    if($_POST['chkAddNewType']=="newNodeData"){
    	echo $question = $_POST['txtAddQuestion']; 	
    }else if($_POST['chkAddNewType']=="haveNodeData"){
    	echo $question = $_POST['txtAddQuestion2']; 
    }
    
    //$yesNodeID;
    //$noNodeID;
    echo $parentNodeID=$_POST['txtAddParentID'];
    $haveAdditionData=0;
    $typeAdditionData=null;
    if(isset($_POST['chkAdditionData'])){
		echo $haveAdditionData=1;
		echo $typeAdditionData=$_POST['slcTypeAdditionData'];
    }
  }//Add Yes-Node , No-Node
  if(isset($_POST['hidAddRoot'])){
        //echo "string";
        $symptomID = $_POST['hidSymptomID'];
        $isRoot = 1;
        $isNoNode=0;
        $isYesNode=0;
        $question=$_POST['questionTxt'];
        $parentNodeID=0;
        $haveAdditionData=0;
        $typeAdditionData=null;
        if(isset($_POST['chkAdditionData'])){
            echo $haveAdditionData=1;
            echo $typeAdditionData=$_POST['slcTypeAdditionData'];
        }

  }   
   

    //Add data
    $strSQLInsert = "INSERT INTO symptomnode(symptomID,isRoot,isYesNode,isNoNode,question,parentNodeID,
        haveAdditionData,typeAdditionData) VALUES('".$symptomID."','".$isRoot."','".$isYesNode."'
        ,'".$isNoNode."','".$question."','".$parentNodeID."','".$haveAdditionData."','".$typeAdditionData."')";
    $objQuery = mysql_query($strSQLInsert);
    $Newid = mysql_insert_id();
    //echo $Newid;  
    if(!$objQuery)
    {
        echo "Error Save [".mysql_error()."]";
    }
    //This Node is not root Node
    if($isYesNode==1){
        //Update yesNodeID of parent Node
        $strSQLUpdate = "UPDATE symptomnode SET yesNodeID='".$Newid."' WHERE symptomnodeID=
        '".$parentNodeID."' ";
        mysql_query($strSQLUpdate);
    }
    else if($isNoNode==1){
        //Update noNodeID of parent Node
        $strSQLUpdate = "UPDATE symptomnode SET noNodeID='".$Newid."' WHERE symptomnodeID=
        '".$parentNodeID."' ";
        mysql_query($strSQLUpdate);
    }

        header("Location: SymptomNodeShow.php?symptomID=".$symptomID);

?>