 <?php session_start();?>
 <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MOEMOB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="SymptomManage.php">Symptom</a></li> -->
            <li><a href="SymptomManage.php">Symptom</a></li>
            <li class="active"><a href="DiseaseManage.php">Disease</a></li>
            <li><a href="SymptomNodeShow.php">Symptom Node</a></li>
            <?php if(isset($_SESSION['userID'])){
                echo "<li style='margin-left:300px;'><a href='logout.php'>log out</a></li>";
            }else{
                echo "<li style='margin-left:300px;'><a href='login.php'>log in</a></li>";
            }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php require_once('functionCheckLogin.php');?>