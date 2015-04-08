<?php 
    include('header.php');
    include('subheader_symptomNode.php');
?>
<?php if(isset($_SESSION['userID'])) { ?>
<?php
    include('connectAzure.php');
    
    //check ID
    if(isset($_GET['symptomID'])){
        $sqlCheck = "SELECT count(*) FROM symptom WHERE symptomID =".$_GET['symptomID'];
        $objQueryCheck = mysql_query($sqlCheck) or die ("Error Query [".$sqlCheck."]");
        $dataArray = mysql_fetch_array($objQueryCheck);
        $exist  = $dataArray['count(*)'];
        //echo($exist);
        if($exist == '0'){
    ?>
            <script>window.location = "SymptomNodeShow.php"</script>
<?php
        }
    }
   
?>
<?php
    $strSQLsymptom = "SELECT * FROM symptom";
    $objQuerysymptom = mysql_query($strSQLsymptom) or die ("Error Query [".$strSQLsymptom."]");
    $showName = NULL;
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="searchSynptom" align="right">
            <form id="symptom-update" method="GET">
                <select id="symptom-list" title="เลือกอาการ" class="selectpicker" data-live-search="true" name="symptomID">
                    <option data-hidden="true" value=""></option>
                <?php while($objResultSymptom= mysql_fetch_array($objQuerysymptom)){?>
                      <option value="<?php echo $objResultSymptom['symptomID'];?>" 
                        <?php //keep the recent selector
                        if(isset($_POST['symptomOption'])||$_GET['symptomID']){
                            if($_POST['symptomOption']== $objResultSymptom['symptomID'] ||$_GET['symptomID']==$objResultSymptom['symptomID']) {
                            echo "selected";
                            $symptomID = $objResultSymptom['symptomID'];
                            $showName = $objResultSymptom['name'];
                            }
                        }
                        ?>>
                        <?php echo $objResultSymptom['name'];?></option>
                <?php }//while($objQuerysymptom= mysql_fetch_array($objQuery))?>
                </select>
                <input type="submit" class="btn btn-primary" value="ค้นหา">
            </form>
            </div><!-- class="searchSynptom" -->
            </div><!-- class="col-md-12" -->
        </div><!-- class="row" -->

        <div class="row">
            <div class="col-md-12">
                <h2>รายการคำถามของอาการ: <?php if($showName!=NULL){echo $showName;}else{echo "-";}?></h2>
                <hr/>
            </div>

        </div>

    <div class="row">
        <div class="col-md-12">
    <?php
    if(isset($_GET['symptomID'])){
       if($_GET['symptomID']!=""){
       

        $strSQL = "SELECT * FROM symptomnode WHERE symptomID = ".$_GET['symptomID'];
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

        $existData = 0;
        //echo "Test :".$objQuery."<br>";
    while($objResult= mysql_fetch_array($objQuery)){
        $existData = 1;
        //echo "<div id='display-node ".$objResult['symptomNodeID']."' data-toggle='modal' data-target='#testModal'>";
        //echo "<div id='display-node' data-toggle='modal' data-target='#testModal'>";
        //echo "<img src='test.jpeg' width='30' height='30' Onclick='Javascript:alert('imgTest');'/>";
        ?>
        <span  class="glyphicon glyphicon-edit" style="cursor: pointer;" Onclick="openModal('<?php echo $objResult['symptomNodeID'];?>')"></span>
        <?php
        echo "ID = ".$objResult['symptomNodeID']."---";
        echo $objResult['symptomID'];
        echo $objResult['isRoot'];
        echo $objResult['isYesNode'];
        echo $objResult['isNoNode'];
        //echo "<span id='question-node ".$objResult['symptomNodeID']."' data-toggle='modal' data-target='#testModal'>".$objResult['question']."</span>";
        echo "<span id='".$objResult['symptomNodeID']."'>".$objResult['question']."</span>"; 
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
    }//END:if($existData==0)
    }//END:$_GET['symptomID']!=""
}//Isset Get
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
        <h4 class="modal-title" id="myModalLabel">แก้ไขคำถาม</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>คำถาม:</label>
            <!-- <input type="text" class="form-control" id="edit-question"></input> -->
            <textarea id="edit-question" class="form-control" rows="3"></textarea>
            <input type="hidden" id="hid-id"/>
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

        function openModal(symptomNodeID){
            var nodeid = symptomNodeID;
            var nodequestion = document.getElementById(nodeid).innerHTML;
            //alert('Onclick: '+nodequestion);
            $('#testModal').modal('show');
            $('#edit-question').val(nodequestion);
            $('#hid-id').val(nodeid);
        }

        //Query data when selector was changed 
        $(document).ready(function(){
            $('#symptom-list').change(function(){
                $('#symptom-update').submit();
                //alert("test");
            });

            $('#button-update').click(function(){
                var data = $('#edit-question').val();
                var idNode = $('#hid-id').val();
                //alert("Data : "+data);
                 $.ajax({
                    type: "POST",
                    url: "SymptomNodeUpdate.php",
                    data: {data: data,type: "update",idnode:idNode},
                    success: function(result) {
                        //alert("result : "+result);
                        $('#'+idNode).html(result);
                        $('#testModal').modal('hide');
                    }
                });
            });


        });
    </script>

<?php include('footer.php');?>