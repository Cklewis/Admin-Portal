<?php require "includes/database.php"; ?>
<?php include "includes/header.php"; ?>
	<?php include "includes/navigation.php" ?>
		<br>
		<div class="container">
			<div class="row">
				<div class="mx-auto col-sm-9">
					<div class="card text-center card-form p-5">
						<div class="card-body">
							<form>
								<h2>Registration</h2>
								<br>
								<div class="form-group row">
									<label for="firstName" class="col-sm-3 control-label">First Name</label>
									<div class="col-sm-9">
									<input type="text" id="firstName" placeholder="First Name" class="form-control" autofocus required="true">
									</div>
								</div>
								<div class="form-group row">
									<label for="lastName" class="col-sm-3 control-label">Last Name</label>
									<div class="col-sm-9">
									<input type="text" id="lastName" placeholder="Last Name" class="form-control" autofocus required="true">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
									<input type="email" id="email" placeholder="Email" class="form-control" name="email" required="true">
									</div>
								</div>

								<div class="form-group row">
									<label for="userName" class="col-sm-3 control-label">Username</label>
									<div class="col-sm-9">
									<input type="text" id="username" placeholder="Username" class="form-control" required="true">
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
									<input type="password" id="password" placeholder="Password" class="form-control" required="true">
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-9">
									<input type="password" id="password" placeholder="Confirm Password" class="form-control" required="true"
									>
									</div>
								</div>

								<div class="form-group row">
									<label for="adminRole" class="col-sm-3 control-label">Admin Role</label>
									<div class="col-sm-9">
									<select type="text" id="AdminRoleType" required>
										<option selected disabled value="">Select</option>

										<option value="Admin">Admin</option>

										<option value="Finance Admin">Finance Admin</option>

										<option value="Sales Admin">Sales Admin</option>

										<option value="Human Resource Admin">Human Resource Admin</option>

										<option value="Engineering Admin">Engineering Admin</option>
									</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
									<span class="help-block">*All fields required</span>
									</div>
								</div>
								
								<button type="submit" class="btn btn-primary btn-md">Register</button>
								
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