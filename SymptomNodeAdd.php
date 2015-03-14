<?php include('header.php');?>
<?php include('subheader.php');?>
<?php
    // $DB_HOST = "localhost";
    // $DB_USER = "root";
    // $DB_PASS = "";
    // $DB_NAME = "medmobdb";

    // $objConnect = mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
    // $objDB = mysql_select_db($DB_NAME) or die("Couldn't select database");
    // //$objDB = mysql_select_db("thaicreatedb");
    // mysql_query("SET NAMES UTF8");
    include('connectAzure.php');

    $strSQL = "SELECT * FROM symptomnode AS sn JOIN symptom AS s ON sn.symptomID=s.symptomID 
    WHERE symptomNodeID=".$_GET['symptomNodeID'];
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    //echo count($objQuery);
    $objResult = mysql_fetch_array($objQuery);
    $typeNode;

    if($_GET['typeNode']== "yesNode"){
    	$typeNode="yesNode";
    }
    else if ($_GET['typeNode']== "noNode") {
    	$typeNode="noNode";
    }
    else if ($_GET['typeNode']== "rootNode") {
    	$typeNode="rootNode";
    }
    $parentNodeID = $objResult['symptomNodeID'];
    echo $parentNodeQuestion = $objResult['question'];
    $symptomID=$objResult['symptomID'];
    $symptomName=$objResult['name'];
  

?>
<h3><?php echo $_GET['typeNode'];?></h3>
<div class="container">
	<form class="form-horizontal" name = "symptomNodeAdd" method="post" action="SymptomNodeCompute.php">
		
		<input type="hidden" name="hidSymptomID" value=<?php echo $symptomID;?>>
		<input type="hidden" name="hidTypeNode" value=<?php echo $typeNode;?>>
		<input type="hidden" name="hidTypeNode" value=<?php echo $typeNode;?>>

		<div class="form-group">
			<label for="InputSymptomName">Symptom Name : </label>
			<input id="InputSymptomName" type="text" name="txtAddSymptom" readonly value=<?php echo $symptomName?>>
	
		</div>	
		Parent ID:<input type="text" disabled value=<?php echo $parentNodeID?>>
		<input type="hidden" name="txtAddParentID" value=<?php echo $parentNodeID?>>
		<br>
		Parent Question:<input type="text" disabled name="txtAddParentQuestion" value=<?php echo $parentNodeQuestion?>>
		<br>	
		<input class="check-node-data new-node-data" type="radio" name="chkAddNewType" checked value="newNodeData"> New Data
		<div id="new-node-data-panel">
			Question : <!-- <input type = "text" name ="txtAddQuestion"> -->
			<textarea id="questionID" class="form-control" name ="txtAddQuestion" rows="5"></textarea>
			<br>
			<input class="have-addition-data" type = "checkbox" name = "chkAdditionData">Have Addition Data
			<br>
			<div id="type-addition-data">
				Type Addition Data: 
				<select name="slcTypeAdditionData">
					<option>อุณหภูมิ</option>
					<option>ความดัน</option>
					<option>เพศชาย</option>
					<option>เพศหญิง</option>
				</select>
			</div>
		</div>
		<br>
		<!-- <input type="radio" name="chkAddNewType" value="NodeData">test -->
		<input class="check-node-data have-node-data" type="radio" name="chkAddNewType" value="haveNodeData"> Have Data Node
		<div id="have-node-data-panel">
			<!-- Value from list of value -->
			Question: <input type = "text" readonly id="question-value">
			<input type="button" value="..." data-toggle="modal" data-target="#list-of-symptomNode-modal">
			<input type = "hidden" name ="txtAddQuestion2" value="...">
		</div>
		<br>
		<input class="btn btn-success" type="submit" name="btnAddSymptomNode" value="Add Node">
	
	</form>
	<input type = "button" value ="Back" Onclick = "location.href ='SymptomNodeShow.php'">
</div><!-- container -->



	<!-- Modal for List Symptom Node -->
	<div class="modal fade" id="list-of-symptomNode-modal" tabindex="-1" role="dialog" >
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Symptom Node List</h4>
	      </div>  <!-- modal-header -->
	      <div class="modal-body">
	        <table id="modal-table" class="table table-bordered table-hover">
	        	<thead>
	        		<tr>
	        			<th style="text-align: center;">ID</th>
	        			<th style="text-align: center;">Question</th>
	        		</tr>
	        	</thead>
	        	<tbody>
	        <?php

	        	$strSQLSymptomNode="SELECT * FROM symptomnode";
	        	$objQuerySymptomNode=mysql_query($strSQLSymptomNode) or die ("Error Query [".$strSQLSymptomNode."]");
	        	//$objQuery = mysql_query($strSQLDisease) or die ("Error Query [".$strSQLDisease."]");
	        	while ($objResultSymptomNode=mysql_fetch_array($objQuerySymptomNode)) {

	        		# code...
	        	
	        ?>
	        		<tr>
	        			<td style="text-align: center;">
	        				<a href="javascript:void(0);" class="choose-button"><?php echo 
	        				$objResultSymptomNode['symptomNodeID']; ?></a>
	        			</td>
	        			<td class="<?php echo $objResultSymptomNode['symptomNodeID']?> question"><?php echo $objResultSymptomNode['question']; ?></td>
	        			<!-- <td class="001 remarks">none</td> -->
	        		</tr>
	
	        <?php
	        	}//while ($objResultDisease=mysql_fetch_array($objQueryDisease))
	        	mysql_close($objConnect);
	        ?>
	        	</tbody>
	        </table>
	      </div>  <!-- modal-body -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>  <!-- modal-footer -->
	    </div>
	  </div>
	</div>



    <script>
    	$(document).ready(function(){
    		
     		//$('#new-node-data-panel').hide();
     		$('#have-node-data-panel').hide();
     		$('#new-node-data-panel #type-addition-data').hide();

			$('.check-node-data').click(function(){
				if($('.check-node-data.new-node-data').prop('checked')){
					$('#have-node-data-panel').hide();
					$('#new-node-data-panel').fadeIn(500);
					
				}
				else if($('.check-node-data.have-node-data').prop('checked')){
					$('.have-addition-data').removeProp('checked');
					$('#new-node-data-panel #type-addition-data').hide();
					$('#new-node-data-panel').hide();
					$('#have-node-data-panel').fadeIn(500);
					
				}	
			});



			$('.have-addition-data').click(function(){
    			if($(this).prop('checked')){
    				//is(':checked')){
    				$('#type-addition-data').show();
    			}
    			else{
    				$('#type-addition-data').hide();
    			}
    			
    		});

			$('#questionID').focus();

			//Modal 
			$('.choose-button').click(function(){
				var id = $(this).html();
				var disease = $('.'+id+'.question').html();
				//var remarks = $('.'+id+'.remarks').html();
				$('#question-value').val(disease);
				$('#list-of-symptomNode-modal').modal('hide');
			});
			$('#modal-table').dataTable();


    	});//(document).ready


    
    </script>
<?php include('footer.php'); ?>