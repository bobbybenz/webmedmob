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
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Chosen library -->
    <link rel="stylesheet" href="plugins/chosen/docsupport/style.css">
    <link rel="stylesheet" href="plugins/chosen/docsupport/prism.css">
    <link rel="stylesheet" href="plugins/chosen/chosen.css">
    <script src="plugins/chosen/chosen.jquery.js" type="text/javascript"></script>
    <script src="plugins/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="plugins/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        var config = {
          '.chosen-select'           : {},
          '.chosen-select-deselect'  : {allow_single_deselect:true},
          '.chosen-select-no-single' : {disable_search_threshold:10},
          '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
          '.chosen-select-width'     : {width:"95%"}
        }
        for (var selector in config) {
          $(selector).chosen(config[selector]);
        }
      </script>

    <!-- Datatable -->
    <!-- <link href="plugins/datatable/dataTables.bootstrap.css" rel="stylesheet"> -->
    <link href="plugins/datatable/jquery.dataTables.css" rel="stylesheet">
    <!--<script src="plugins/datatable/dataTables.bootstrap.js"></script> -->
    <script type="text/javascript" language="javascript" src="plugins/datatable/jquery.dataTables.js"></script>
    <!--<script type="text/javascript" language="javascript" src="plugins/datatable/jquery.js"></script>-->
    
</head>
<body>