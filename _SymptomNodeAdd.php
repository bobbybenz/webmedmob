<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Symptom Node</title>

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<form name = "symptomNodeAdd" method="post" action="#">
		<div>
			Symptom Name : <input type="text" name="txtAddSymptom" disabled><input type="button" value="..."
			OnClicK="javascript: openListOfSymptom();">


		</div>	
		Parent ID:<input type="text" disabled>
		<br>
		Parent Question:<input type="text" disabled>
		<br>	
		<input id="new-node-data" type="radio" name="chkNewType" value"newData"> New Data
		<div id="new-node-data-panel">
			Question : <input type = "text" name ="txtAddQuestion">
			<br>
			<input type = "checkbox" name = "chkRoot">isRoot
			<br>
			<input type = "checkbox" name = "chkLeftorRight" class="left-or-right-choice">Left or Right
			<div id="left-right-panel">
				<br>
				<input type="radio" name="LeftRight" value="left" checked>Left
				<br>
				<input type="radio" name="LeftRight" value="right">Right
			</div>  <!-- left-right-panel -->
			<br>
			<input type = "checkbox" name = "chkAdditionData">Have Addition Data
			<br>
			Type Addition Data: 
			<select>
				<option>อุณหภูมิ</option>
				<option>ความดัน</option>
				<option>ผลตรวจเลือด</option>
			</select>
	
		</div>
		<br>
		<input id="have-node-data" type="radio" name="chkNewType" value"haveData"> Have Data Node
		<div id="have-node-data-panel">
			Question: <input type = "text" name ="txtAddQuestion" disabled><input type="button" value="...">
			<br>
			<input type="radio" name="LeftRight" value="left" checked>Left
			<br>
			<input type="radio" name="LeftRight" value="right">Right
		</div>
		<input type="submit" name="btnAddSymptomNode" value="Add Node">
	
	</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    	$(document).ready(function(){
    		$('#left-right-panel').hide();
    		$('.left-or-right-choice').click(function(){
    			if($(this).prop('checked')){
    				//is(':checked')){
    				$('#left-right-panel').fadeIn(500);
    			}
    			else{
    				$('#left-right-panel').fadeOut(500);
    			}
    			
    		});
    		//$('#new-node-data-panel').hide();

			// $('#new-node-data').click(function(){
			// if($(this).prop('checked')){
			// 	//is(':checked')){
			// 	$('#new-node-data-panel').fadeIn(500);
			// }
			// else{
			// 	$('#new-node-data-panel').fadeOut(500);
			// }
		// });


    	});


    	function openListOfSymptom(){
			window.open("login.php","popup","width=600,height=350");
		}
    </script>
</body>
</html>