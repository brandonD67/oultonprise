<?php
include 'includes/header.php';
?>
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
    ?>
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Registration</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Registration</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Register a new account</h3>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signin.php">Login</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
                        <hr>

                            <form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
	
	<p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	 <input id="password" type="email" name="email"/></p>
 
     <p><label>Password&nbsp;&nbsp; : </label>
	 <input id="password" type="password" name="password" placeholder="password" /></p>
 
    <a class="btn" href="login.php">Login</a>
    <input class="btn register" type="submit" name="submit" value="Register" />
    </form>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->

<?php
include '/includes/footer.php';


