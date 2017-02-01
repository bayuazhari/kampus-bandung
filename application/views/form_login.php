<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .main {
        padding-top: 70px;
      }
      .login-wrapper {
          margin-top: 100px;
      }
    </style>
  </head>
  <body>    
    <div class="container">
  		<div class="row login-wrapper">
  			<div class="col-md-4 col-xs-6 col-md-offset-4 col-xs-offset-3">
  				<div class="panel panel-default">
  					<div class="panel-heading text-center">
  						<strong>Kampus Bandung</strong>
  					</div>
  					<div class="panel-body">  
              <?php $error = $this->session->flashdata("error"); ?>
  						<div class="text-center alert alert-<?php echo $error ? 'danger' : 'info' ?> alert-dismissible" role="alert">
  						  <?php echo $error ? $error : 'Masukkan username dan password Anda' ?>
  						</div>

  						<?php echo form_open('login'); ?>  
                <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>              
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="username">Username</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-user"></i>
  									</span>
  									<input type="text" class="form-control" name="username" id="username">
  								</div>  
                  <?php echo $error; ?>
  							</div>
                <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								<label for="password">Password</label>
  								<div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-lock"></i>
  									</span>
  									<input type="password" class="form-control" name="password" id="password">
  								</div> 
                  <?php echo $error; ?>
  							</div>
  							<button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Login</button>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
    <footer> 
        <p class="text-center">&copy; <?php echo date('Y') ?> Kampus Bandung<br>
      Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>                          
    </footer>
  </body>
</html>