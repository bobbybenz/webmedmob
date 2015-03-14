<?php 
    include('header.php');
    include('subheader.php');
?>
<?php if(isset($_SESSION['userID'])) { ?>
<?php
    include('connectAzure.php');
    
?>
<?php
    $strSQLsymptom = "SELECT * FROM symptom";
    $objQuerysymptom = mysql_query($strSQLsymptom) or die ("Error Query [".$strSQLsymptom."]");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form id="symptom-update" method="POST">
                <h4>เลือกอาการ</h4>
                <select id="symptom-list" name="symptomOption">
                      <option value="">       </option>
                <?php while($objResultSymptom= mysql_fetch_array($objQuerysymptom)){?>
                      <option value="<?php echo $objResultSymptom['symptomID'];?>" 
                        <?php //keep the recent selector
                        if(isset($_POST['symptomOption'])||$_GET['symptomID']){
                            if($_POST['symptomOption']== $objResultSymptom['symptomID'] ||$_GET['symptomID']==$objResultSymptom['symptomID']) {
                            echo "selected";
                            $symptomID = $objResultSymptom['symptomID'];
                            }
                        }
                        ?>>
                        <?php echo $objResultSymptom['name'];?></option>
                <?php }//while($objQuerysymptom= mysql_fetch_array($objQuery))?>
                </select>
                <input type="submit" value="search">
            </form>
            </div>
        </div>

    <div class="row">
    <?php
    if(isset($_GET['symptomID'])){
        $strSQL = "SELECT * FROM symptomnode WHERE symptomID = ".$_GET['symptomID'];
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $existData = 0;
    //echo "Test :".$symptomID."<br>";
    while($objResult= mysql_fetch_array($objQuery)){
        $existData = 1;
        echo "ID = ".$objResult['symptomNodeID']."--";
        echo $objResult['symptomID'];
        echo $objResult['isRoot'];
        echo $objResult['isYesNode'];
        echo $objResult['isNoNode'];
        echo $objResult['question'];
        echo $objResult['yesNodeID'];
        echo $objResult['noNodeID'];
        echo $objResult['parentNodeID'];
        echo $objResult['haveAdditionData'];
        echo $objResult['typeAdditionData'];
    
        if($objResult['yesNodeID'] ==null){
            // echo "<input type='button' value='Yes Node' Onclick='JavaScript:alert(".$objResult['symptomNodeID'].")' >";  
        ?>
            <input type='button' value='Yes Node' 
            Onclick='JavaScript:
            goToSymptomNodeAdd("yesNode","<?php echo $objResult['symptomNodeID'];?>");
            '>
        <?php
        }//if($objResult['yesNodeID'] ==null)

        if($objResult['noNodeID'] ==null){
        ?>

            <input type='button' value='No Node' 
            Onclick='JavaScript:
            goToSymptomNodeAdd("noNode","<?php echo $objResult['symptomNodeID'];?>");
            '>
        <?php
        }//if($objResult['noNodeID'] ==null)
        
        //if Last No of Symptom, I will be added disease.
         if($objResult['yesNodeID'] ==null && $objResult['noNodeID'] ==null){
            $strSQLCheck = "SELECT * FROM diseaseofsymptom WHERE symptomNodeID=".$objResult['symptomNodeID'];
            $objQueryCheck = mysql_query($strSQLCheck);
            $result = mysql_fetch_array($objQueryCheck);           
            //echo "objQueryCheck:".$objQueryCheck."\n";
            //echo "objQueryCheck: ".$result."\n";
            if($result==null){
                       
    ?>
        <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=Add" > Add Disease </a>
    
    <?php
        }//if($result==null)
        else{
        ?>
            <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=Add" > Edit Disease </a>
        <?php }
        }//if($objResult['yesNodeID'] ==null && $objResult['noNodeID'] ==null)
        else{

    ?>
        <!-- <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=View" > View Detail </a> -->
    
    <?php
            }

            echo "<br>";
        }//while($objResult= mysql_fetch_array($objQuery))
    if($existData==0){
        ?>
        <input type='button' value='Add Root Node' 
            Onclick='JavaScript:
            location.href = "SymptomNodeAddRoot.php?symptomID=<?php echo $symptomID;?>";
            '>
        <?php
    }

    }//Isset Get

//
    if(isset($_POST['symptomOption'])){
        if($_POST['symptomOption'] !=""){
    $strSQL = "SELECT * FROM symptomnode WHERE symptomID = ".$_POST['symptomOption'];
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    $existData = 0;
    //echo "Test :".$symptomID."<br>";
    while($objResult= mysql_fetch_array($objQuery)){
        $existData = 1;
    	echo "ID = ".$objResult['symptomNodeID']."---";
    	echo $objResult['symptomID'];
    	echo $objResult['isRoot'];
    	echo $objResult['isYesNode'];
    	echo $objResult['isNoNode'];
    	echo $objResult['question'];
    	echo $objResult['yesNodeID'];
    	echo $objResult['noNodeID'];
    	echo $objResult['parentNodeID'];
    	echo $objResult['haveAdditionData'];
    	echo $objResult['typeAdditionData'];
    
    	if($objResult['yesNodeID'] ==null){
    		// echo "<input type='button' value='Yes Node' Onclick='JavaScript:alert(".$objResult['symptomNodeID'].")' >";	
    	?>
	    	<input type='button' value='Yes Node' 
	    	Onclick='JavaScript:
	    	goToSymptomNodeAdd("yesNode","<?php echo $objResult['symptomNodeID'];?>");
	    	'>
    	<?php
    	}//if($objResult['yesNodeID'] ==null)

    	if($objResult['noNodeID'] ==null){
    	?>

	    	<input type='button' value='No Node' 
	    	Onclick='JavaScript:
	    	goToSymptomNodeAdd("noNode","<?php echo $objResult['symptomNodeID'];?>");
	    	'>
    	<?php
    	}//if($objResult['noNodeID'] ==null)
    	
        //if Last No of Symptom, I will be added disease.
        if($objResult['yesNodeID'] ==null && $objResult['noNodeID'] ==null){
            $strSQLCheck = "SELECT * FROM diseaseofsymptom WHERE symptomNodeID=".$objResult['symptomNodeID'];
            $objQueryCheck = mysql_query($strSQLCheck);
            $result = mysql_fetch_array($objQueryCheck);           
            //echo "objQueryCheck:".$objQueryCheck."\n";
            //echo "objQueryCheck: ".$result."\n";
            if($result==null){
                       
    ?>
        <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=Add" > Add Disease </a>
    
    <?php
        }//if($result==null)
        else{
        ?>
            <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=Add" > Edit Disease </a>
        <?php }
        }//if($objResult['yesNodeID'] ==null && $objResult['noNodeID'] ==null)
        else{

    ?>
        <!-- <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $objResult['symptomNodeID'];?>&type=View" > View Detail </a> -->
    
    <?php
            }

            echo "<br>";
        }//while($objResult= mysql_fetch_array($objQuery))
    if($existData==0){
        ?>
        <input type='button' value='Add Root Node' 
            Onclick='JavaScript:
            location.href = "SymptomNodeAddRoot.php?symptomID=<?php echo $symptomID;?>";
            '>
        <?php
    }


    }//if($_POST['symptomOption'])!="")
}//isset($_POST['symptomOption'])
else{//Donothing
    //echo "string";
}
	?>
</div>
</div><!-- container -->
<?php }//Session?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
   		function goToSymptomNodeAdd(typeNode, symptomNodeID){
   			//alert("typeNode:"+typeNode+"symptomNodeID:"+symptomNodeID);
   			window.location="SymptomNodeAdd.php?typeNode="+typeNode+"&symptomNodeID="+symptomNodeID;
   		}

        //Query data when selector was changed 
        $(document).ready(function(){
            $('#symptom-list').change(function(){
                $('#symptom-update').submit();
                //alert("test");

            });

        });
    </script>

<?php include('footer.php');?>