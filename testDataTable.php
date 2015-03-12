<?php include('header.php');?>
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
    $strSQL = "SELECT * FROM symptom";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

  ?>
<div class="container">
	
</div>
<form>
<table id="test">
	<thead>
		<tr>
			<td>
				test
			</td>
			<td>
				Value
			</td>
			<td>
				test
			</td>
			<td>
				Value
			</td>
		</tr>

	</thead>
	<tbody>		
<?php while ($objResult = mysql_fetch_array($objQuery)) { 
	# code...

?>
		<tr>
			
			<td><div align="center"><?php echo $objResult["symptomID"];?></div></td>
          	<td><?php echo $objResult["name"];?></td>
          	<td><?php echo $objResult["flowNumber"];?></td>
          	<td><div align="center"><?php echo $objResult["partOfBody"];?></div></td>
		</tr>
<?php } 

?>
		<tr>
			
			<td><input type="input"></td>
			<td><input type="input"></td>
			<td><input type="input"></td>
			<td><input type="input"></td>


		</tr>
	</tbody>
		
</table>

</form>

<script>
$(document).ready(function(){
  $('#test').dataTable();

});
</script>
<?php include('footer.php');?>