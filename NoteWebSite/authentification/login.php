<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style-login.css">
</head>
<body>
	<div class="container">
	<header>

	</header> 
        <div class = "box">
          
           <div class="box_img"><img src="ENSAB.png" width=90%></div> 
          
            <form method="post" action="traitment.php" >
                
                    <?php 
                        if(isset($_COOKIE['login_error'])) {
                            echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['login_error'].'</div>';
                        } 
                    ?>
                <div class="inputbox">
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="inputbox">
                    <input class="input2" type="password" name="password" required>
                    <label>password</label>
                </div>
                <input type="submit" name="" value="Log in">
                <p class="pass_forgot"><a href="#">FORGET PASSWORD ?</a></p>
               

            </form>
         
        </div>
</body>
</html>