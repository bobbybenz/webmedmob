<?php

include('connectAzure.php');
if(isset($_POST['hidTypeNode'])){
    echo $_POST['chkAddNewType'];
    echo $parentNodeID=$_POST['txtAddParentID'];
    if($_POST['hidTypeNode']=="yesNode"){
        echo "Yes Node:".$isYesNode=1;
        echo "No Node:".$isNoNode=0;
    }
    else if($_POST['hidTypeNode']=="noNode"){
        echo "Yes Node:".$isYesNode=0;
        echo "No Node:".$isNoNode=1;
    }

//----Add new node ----- New Data
if($_POST['chkAddNewType']=="newNodeData"){
    echo $question = $_POST['txtAddQuestion'];
    echo $symptomID=$_POST['hidSymptomID'];
    //Come from Hava data Node. This node is a Root Node and link from another Symptom
    if(isset($_POST['rootNode'])){
    	//Come from Hava data Node. This node is a Root Node and link from another Symptom
    	echo $isRoot = 1;
    }
    else{
    	echo $isRoot=0;
    }
 
 

    echo $parentNodeID=$_POST['txtAddParentID'];
    $haveAdditionData=0;
    $typeAdditionData=null;
    if(isset($_POST['chkAdditionData'])){
		echo $haveAdditionData=1;
		echo $typeAdditionData=$_POST['slcTypeAdditionData'];
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
}
else if($_POST['chkAddNewType']=="haveNodeData"){
    //Update left or right node with
    echo "<br>";
    echo $linkNodeID = $_POST['idLinkNode'];

    if($isYesNode==1){
        //Update yesNodeID of parent Node
        $strSQLUpdate = "UPDATE symptomnode SET yesNodeID='".$linkNodeID."' WHERE symptomnodeID=
        '".$parentNodeID."' ";
        mysql_query($strSQLUpdate);
    }
    else if($isNoNode==1){
        //Update noNodeID of parent Node
        $strSQLUpdate = "UPDATE symptomnode SET noNodeID='".$linkNodeID."' WHERE symptomnodeID=
        '".$parentNodeID."' ";
        mysql_query($strSQLUpdate);
    }
}

}// End:isset($_POST['hidTypeNode'])
    header("Location: SymptomNodeShow.php?symptomID=".$symptomID);

?>