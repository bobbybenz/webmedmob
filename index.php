<?php $title = "หน้าหลัก";?>
<?php include('header.php');?>

<?php include('subheader.php');?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
        	<h1>Log in</h1>
        	<form name="loginFrom" method="post" action="check_login.php">
            <div class="form-group">
              <label for="txtUsername">Username</label>
              <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="txtPassword">Password</label>
              <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </div>

	</div>
     
    </div><!-- /.container -->

<?php include('footer.php');?>