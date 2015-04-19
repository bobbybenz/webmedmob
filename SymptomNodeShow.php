<style>

</style>

<?php $title = "รายการคำถามของอาการ";?>
<?php 
    include('header.php');
    include('subheader_symptomNode.php');
?>
<?php if(isset($_SESSION['userID'])) { ?>
<?php
    include('connectAzure.php');
    
    //check ID
    if(isset($_GET['symptomID'])){
        if($_GET['symptomID']!=""){
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
      }//End: if($_GET['symptomID']!=""
    }//End: isset($_GET['symptomID'])
   
?>
<?php
    $strSQLsymptom = "SELECT * FROM symptom";
    $objQuerysymptom = mysql_query($strSQLsymptom) or die ("Error Query [".$strSQLsymptom."]");
    $showName = NULL;
?>
    <div class="container"><!-- Search Symptom -->
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
                <h2>รายการคำถามของอาการ: <i><?php if($showName!=NULL){echo $showName;}else{echo "-";}?></i></h2>
                <hr/>
            </div>

        </div>

<?php
    //Create Array
    $DataArray = array();
    $TreeArray = array();
?>

    <div class="row"><!-- Show Tree -->
        <div class="col-md-12">
    <?php
    if(isset($_GET['symptomID'])){
       if($_GET['symptomID']!=""){
       

        $strSQL = "SELECT * FROM symptomnode WHERE symptomID = ".$_GET['symptomID'];
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
        $count =-1;
        $existData = 0;
        //echo "Test :".$objQuery."<br>";
    while($objResult= mysql_fetch_array($objQuery)){
        $existData = 1;
        
        ?>
        <!-- <span  class="glyphicon glyphicon-edit" style="cursor: pointer;" Onclick="openModal('<?php echo $objResult['symptomNodeID'];?>')"></span> -->
        <?php
        // $count++;
        // echo "[".$count."]ID = ".$objResult['symptomNodeID']."---";
        // echo $objResult['symptomID'];
        // echo $objResult['isRoot'];
        // echo $objResult['isYesNode'];
        // echo $objResult['isNoNode'];
        // //echo "<span id='question-node ".$objResult['symptomNodeID']."' data-toggle='modal' data-target='#testModal'>".$objResult['question']."</span>";
        // echo "<span >".$objResult['question']."</span>"; 
        // echo $objResult['yesNodeID'];
        // echo $objResult['noNodeID'];
        // echo $objResult['parentNodeID'];
        // echo $objResult['haveAdditionData'];
        // echo $objResult['typeAdditionData'];
        $DataArray[] = array(
            'symptomNodeID' => $objResult['symptomNodeID'],
            'symptomID' => $objResult['symptomID'],
            'isRoot' => $objResult['isRoot'],
            'isYesNode' => $objResult['isYesNode'],
            'isNoNode' => $objResult['isNoNode'],
            'question' => $objResult['question'],
            'yesNodeID' => $objResult['yesNodeID'],
            'noNodeID' => $objResult['noNodeID'],
            'parentNodeID' => $objResult['parentNodeID'],
            'haveAdditionData' => $objResult['haveAdditionData'],
            'typeAdditionData' => $objResult['typeAdditionData']
            );
        $TreeArray[$objResult['symptomNodeID']] = $objResult['parentNodeID'];
        
       
        }//while($objResult= mysql_fetch_array($objQuery))
    if($existData==0){
        ?>
        <input type='button' value='Add Root Node' 
            Onclick='JavaScript:
            location.href = "SymptomNodeAddRoot.php?symptomID=<?php echo $symptomID;?>";
            '>
        <?php
        }//END:if($existData==0)
        else{
            echo("<div id='bitree'>");
                printtree(parseTree($TreeArray,$TreeArray),$DataArray);
            echo("</div>");
        }
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

<?php
    //Function Create Tree 
    function parseTree($tree,$temp, $root = 0) {
 
    $return = array();
    # Traverse the tree and search for direct children of the root
    foreach($tree as $child => $parent) {
        # A direct child is found
        if($parent == $root) {
           
            # Append the child into result array and parse its children
            $return[] = array(
                'name' => $child,
                'index' => array_search($child,array_keys($temp)), 
                'children' => parseTree($tree,$temp, $child)
            );
            # Remove item from tree (we don't need to traverse this again)
            unset($tree[$child]);
        }
    }
    return empty($return) ? null : $return;    
}

function printtree($tree,$DataArray) {
    if(!is_null($tree) && count($tree) > 0) {
        echo '<ul>';
        foreach($tree as $node) {
            //echo '<li>'.$node['name']."-index:".$node['index'];
    ?>
        <li>
            <span  class="glyphicon glyphicon-edit" style="cursor: pointer;" Onclick="openModal('<?php echo $DataArray[$node['index']]['symptomNodeID'];?>')"></span>
            <span id='<?php echo $DataArray[$node['index']]['symptomNodeID'];?>'><?php echo $DataArray[$node['index']]['question'];?></span>

    <?php
        //Check Add Yes Node
        if($DataArray[$node['index']]['yesNodeID'] ==null){
            // echo "<input type='button' value='Yes Node' Onclick='JavaScript:alert(".$objResult['symptomNodeID'].")' >";  
        ?>
            <button style ="height:30;margin:3;" class="btn btn-success" type="button" Onclick='JavaScript:
            goToSymptomNodeAdd("yesNode","<?php echo $DataArray[$node['index']]['symptomNodeID'];?>");
            '><span class="glyphicon glyphicon-ok-circle"></span> Yes Node</button>
           <!--  <input class="" type='button' value='Yes Node' 
            Onclick='JavaScript:
            goToSymptomNodeAdd("yesNode","<?php echo $DataArray[$node['index']]['symptomNodeID'];?>");
            '> -->
        <?php
        }//if($DataArray[$node['index']['yesNodeID'] ==null)

        //Check Add No Node
        if($DataArray[$node['index']]['noNodeID'] ==null){
        ?>
            
            <button style ="height:30;margin:3" class="btn btn-danger" type="button" Onclick='JavaScript:
            goToSymptomNodeAdd("noNode","<?php echo $DataArray[$node['index']]['symptomNodeID'];?>");
            '><span class="glyphicon glyphicon-remove-circle"></span> No Node</button>
            <!-- <input type='button' value='No Node' 
            Onclick='JavaScript:
            goToSymptomNodeAdd("noNode","<?php echo $DataArray[$node['index']]['symptomNodeID'];?>");
            '> -->

        <?php
        }//if($DataArray[$node['index']['noNodeID'] ==null)
        
        //if Last No of Symptom, I will be added disease.
        if($DataArray[$node['index']]['yesNodeID'] ==null && $DataArray[$node['index']]['noNodeID'] ==null){
            $strSQLCheck = "SELECT * FROM diseaseofsymptom WHERE symptomNodeID=".$DataArray[$node['index']]['symptomNodeID'];
            $objQueryCheck = mysql_query($strSQLCheck);
            $result = mysql_fetch_array($objQueryCheck);           
            //echo "objQueryCheck:".$objQueryCheck."\n";
            //echo "objQueryCheck: ".$result."\n";
            if($result==null){
                       
    ?>
        <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $DataArray[$node['index']]['symptomNodeID'];?>&type=Add" > Add Disease </a>
    
    <?php
        }//if($result==null)
        else{
        ?>
            <a href = "DiseaseOfSymptomNodeManage.php?symptomNodeID=<?php echo $DataArray[$node['index']]['symptomNodeID'];?>&type=Add" > Edit Disease </a>
        <?php }
        }//if($DataArray[$node['index']['yesNodeID'] ==null && $objResult['noNodeID'] ==null)

            //Recursive Print Tree
            printtree($node['children'],$DataArray);
            echo '</li>';
        }
        echo '</ul>';
    }
}



//print_r(parseTree($TreeArray));
?>

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

            // Selector change value 
            //function test(){
                // if($('#symptom-list').val() != "a"){
                //     alert("No data");
                // }
            //}
            
            // html demo
            

        });

    </script>

<?php include('footer.php');?>