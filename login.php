<?php require "includes/database.php"; ?>
<?php include "includes/header.php"; ?>
    <?php include "includes/navigation.php"; ?>
    <br>
        <div class="container">
            <div class="row">
                <div class="mx-auto col-sm-9">
                    <div class="card text-center card-form p-5">
                        <div class="card-body">
                            <form>
                                <h1>Login</h1>
                                <br>
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
                                
                                <button type="submit" class="btn btn-primary btn-md">Login</button>
                                
                                <br>
                                <hr>
                                
                                <div class="form-footer">
                                    <a href="registration.php">No Account? Register</a>
                                </div>
                            </form>
                        </div> <!-- ./card-body -->
                    </div> <!-- ./card -->
                </div> <!-- ./col -->
            </div>
        </div>

<?php include "includes/footer.php"; ?>

