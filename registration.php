<?php require "includes/database.php"; ?>
<?php include "includes/header.php"; ?>
<?php 

if($_SERVER['REQUEST_METHOD'] == "POST") {

	$firstname = trim($_POST['firstname']);
	$lastname  = trim($_POST['lastname']);
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email    = trim($_POST['email']);
	$adminrole = trim($_POST['adminrole']);


    $error = [

		'firstname' => '',
		'lastname' => '',
		'email'=>'',
		'username'=> '',
		'password'=>'',
		'adminrole' => ''

	];
	
	if($firstname ==''){

        $error['firstname'] = 'First name cannot be empty';

	}
	
	if($lastname ==''){

        $error['lastname'] = 'Last name cannot be empty';

    }

	if($email ==''){

        $error['email'] = 'Email cannot be empty';

    }


    if(email_exists($email)){

        $error['email'] = 'Email already exists, <a href="login.php">Please login</a>';

	}
	
	if($username ==''){

        $error['username'] = 'Username cannot be empty';


    }


    if(username_exists($username)){

		$error['username'] = 'Username already exists, pick another one';
		
	}
	
	if($password == '') {


        $error['password'] = 'Password cannot be empty';

    }


    foreach ($error as $key => $value) {
        
        if(empty($value)){

            unset($error[$key]);

        }



    } // foreach

    if(empty($error)){

        register_user($firstname,$lastname,$username, $email, $password, $adminrole);

        login_user($username, $password);


    }

    

} 


?>
	<?php include "includes/navigation.php" ?>
		<br>
		<div class="container">
			<div class="row">
				<div class="mx-auto col-sm-9">
					<div class="card text-center card-form p-5">
						<div class="card-body">
							<form method="post">
								<h2>Registration</h2>
								<br>
								<div class="form-group row">
									<label for="firstname" class="col-sm-3 control-label">First Name</label>
									<div class="col-sm-9">
										<input type="text" name="firstname" id="firstname" class="form-control" 
										placeholder="First Name" value="<?php echo isset($firstname) ? $firstname : '' ?>">

										<p><?php echo isset($error['firstname']) ? $error['firstname'] : '' ?></p>

									</div>
								</div>
								<div class="form-group row">
									<label for="lastname" class="col-sm-3 control-label">Last Name</label>
									<div class="col-sm-9">
										<input type="text" name="lastname" id="lastname" class="form-control" 
										placeholder="Last Name" value="<?php echo isset($lastname) ? $lastname : '' ?>">

										<p><?php echo isset($error['lastname']) ? $error['lastname'] : '' ?></p>

									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<input type="email" name="email" id="email" class="form-control" 
										placeholder="Email" value="<?php echo isset($email) ? $email : '' ?>">

										<p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>

									</div>
								</div>

								<div class="form-group row">
									<label for="username" class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
										<input type="text" name="username" id="username" class="form-control" 
										placeholder="Username" value="<?php echo isset($username) ? $username : '' ?>">

										<p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>

									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">

										<p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>

									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-9">
										<input type="password" name="password" id="password" class="form-control" placeholder="Confirm Password"
							oninput="check(this)" required="true">
									</div>
								</div>

								<div class="form-group row">
									<label for="adminrole" class="col-sm-3 control-label">Admin Role</label>
									<div class="col-sm-9">
										<select name="adminrole">
											<option selected disabled value="">Select</option>

											<option value="<?php echo isset($adminrole) ? $adminerole : '' ?>"><?php echo $adminrole; ?></option>

										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<span class="help-block">*All fields required</span>
									</div>
								</div>
								
								<input type="submit" name="resgister" id="btn-login" class="btn btn-primary btn-md" value="Register">
								
						<br>
						<hr>
								
								<div class="form-footer">
									<a href="login.php">Have an account? Login</a>
								</div>
							</form>
						</div> <!-- ./card-body -->
					</div> <!-- ./card -->
				</div> <!-- ./col -->
			</div> <!-- ./row -->
		</div> <!-- ./container -->
<?php include "includes/footer.php"; ?>