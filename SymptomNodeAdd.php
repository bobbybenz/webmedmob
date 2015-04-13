<?php include('header.php');?>
<?php include('subheader_symptomNode.php');?>
<?php
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
				<select name="slcTypeAdditionData" class="selectpicker">
					<option>อุณหภูมิ</option>
					<option>ความดัน</option>
					<option>เพศชาย</option>
					<option>เพศหญิง</option>
					<option>ชีพจร</option>	
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
			<input id="id-link-node" type = "hidden" name ="idLinkNode">
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
	      	<div class="row">
	      		<div class="col-md-5">
	      			
	        		<h4 class="modal-title" id="myModalLabel">รายการคำถามตามอาการ</h4>
	      		</div><!-- class="col-md-6" -->
<?php
    $strSQLsymptom = "SELECT * FROM symptom";
    $objQuerysymptom = mysql_query($strSQLsymptom) or die ("Error Query [".$strSQLsymptom."]");
    $showName = NULL;
?>
	      		<div class="col-md-7">
	      			<div align="right">
		      		<select id="select-sym" title="เลือกอาการ" class="selectpicker" data-live-search="true" name="symptomID">
	                    <option data-hidden="true" value=""></option>
	                <?php while($objResultSymptom= mysql_fetch_array($objQuerysymptom)){?>
	                      <option value="<?php echo $objResultSymptom['symptomID'];?>" >
	                        <?php echo $objResultSymptom['name'];?></option>
	                <?php }//while($objQuerysymptom= mysql_fetch_array($objQuery))?>
	                </select>
	      			<input type="button" class="btn btn-primary" id="search-btn" value="ค้นหา">
	      			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      			</div><!-- align="right" -->
	      		</div><!-- class="col-md-6" -->
	      	</div><!-- class="row" -->
	      </div>  <!-- modal-header -->
	      <div class="modal-body">
	      	<div class="show-table">
	      			
	      	</div><!-- class="show-table" -->
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
				//$('#id-link-node').val(id);
				$('input[name="idLinkNode"]').attr('value',id);
				$('#question-value').val(disease);
				$('#list-of-symptomNode-modal').modal('hide');

			});
			$('#modal-table').dataTable();

			//Select madal
		
			$('#search-btn').click(function(){
				var value = $('#select-sym').val();
				alert(value);
				$.ajax({
                    type: "POST",
                    url: "showmodaltable.php",
                    data: {data: value},
                    success: function(result) {
                        alert("result : "+result);
                        $('.show-table').html(result);

                    }
                });
			});

			// $(document).on("change","#select-sym", function(){
			// 	alert('test');
			// });

			// $('.selectpicker').on('change', function(){
   //  			//var selected = $(this).find("option:selected").val();
   //  			//alert(selected);
   //  			alert("test");
  	// 		});

  		

    	});//(document).ready


    
    </script>
<?php include('footer.php'); ?>