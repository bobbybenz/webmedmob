<?php 
    include('header.php');
    include('subheader_symptomNode.php');
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
                <select id="symptom-list" data-placeholder="เลือกอาการ" class="selectpicker" data-live-search="true" name="symptomOption">
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
                <input type="submit" class="btn btn-primary" value="search">
            </form>
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
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
        echo "<a data-toggle='modal' data-target='#testModal'>".$objResult['question']."</a>";
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
        //echo "<div id='display-node ".$objResult['symptomNodeID']."' data-toggle='modal' data-target='#testModal'>";
        //echo "<div id='display-node' data-toggle='modal' data-target='#testModal'>";
    	echo "ID = <span id ='id-node'>".$objResult['symptomNodeID']."</span>---";
    	echo $objResult['symptomID'];
    	echo $objResult['isRoot'];
    	echo $objResult['isYesNode'];
    	echo $objResult['isNoNode'];
    	//echo "<span id='question-node ".$objResult['symptomNodeID']."' data-toggle='modal' data-target='#testModal'>".$objResult['question']."</span>";
        echo "<span id='question-node' data-toggle='modal' data-target='#testModal'>".$objResult['question']."</span>"; 
    	echo $objResult['yesNodeID'];
    	echo $objResult['noNodeID'];
    	echo $objResult['parentNodeID'];
    	echo $objResult['haveAdditionData'];
    	echo $objResult['typeAdditionData'];
        // echo "</div>";
        // echo "<div style='float:left;'>";
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
           // echo "</div>";
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
</div>
</div><!-- container -->
<?php }//Session?>


<!-- Modal -->
<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Symptom Node Detail</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Question:</label>
            <input type="text" class="form-control" id="edit-question"></input>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="button-update">Update</button>
      </div>
    </div>
  </div>
</div>

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

              $('#question-node').click(function(){
                  var questionNode = $("#question-node").html();
                  alert("test"+questionNode);
                  $("#edit-question").val(questionNode);
                  //$("#question-node").html("");              
            });

            $('#button-update').click(function(){
                var data = $('#edit-question').val();
                var idNode = $('#id-node').html();
                //alert("Data : "+data);
                 $.ajax({
                    type: "POST",
                    url: "SymptomNodeUpdate.php",
                    data: {data: data,type: "update",idnode:idNode},
                    success: function(result) {
                        //alert("result : "+result);
                        $('#question-node').html(result);
                        $('#testModal').modal('hide');
                    }
                });
            });


        });
    </script>

<?php include('footer.php');?>