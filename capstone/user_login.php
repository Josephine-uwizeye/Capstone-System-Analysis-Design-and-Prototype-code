

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User login</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<style>
    body{
        /* remove the scroll bar */
        overflow-x: hidden;
    }
    b{
        color: white;
    }
</style>
<body>
    <div class="container-fluid">
        <h2 class="text-center"><nav class="navbar navbar-expand-lg navbar-dark bg-info d-flex">
			<ul class="navbar-nav me-auto d-flex">
				<li class="nav-item text-center  d-flex">
					<a class="nav-link text-center d-flex" href="#"><b>Login</b></a>
				</li>

			</ul>
		</nav></h2>
        <div class="row d-flex aligh-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <form action="" b method="post">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username"
                            name="user_username" required>
                    </div>
                  
                    <!-- user_password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password"
                            name="user_password" required>
                    </div>
                   
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="user_login">
                        <p class="smaill fw-bold mt-2 pt-1">Don't have an account?<a href="user_registration.php"
                                class="text-danger"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if(isset($_POST['user_login'])){

    global $con;
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    $selectt_query = "select * from user_table where  username='$user_username'";
    $resultt = mysqli_query($con, $selectt_query);
    $row_countt = mysqli_num_rows($resultt);
    $row_data=mysqli_fetch_assoc($resultt);
    $user_ipp = getIPAddress();

    // CART ITEM
    $selectt_query_cartt = "select * from cart_details where  ip_adress='$user_ipp'";
    $select_cart = mysqli_query($con, $selectt_query_cartt);
    $row_countt_cart = mysqli_num_rows($select_cart);
    if($row_countt>0){

        if(password_verify($user_password,$row_data['user_password'])){
            
            if($row_countt==1 and $row_countt_cart==0){
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Logged in Successfully!')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            }else{
                $_SESSION['username'] = $user_username;
                echo "<script>alert('Logged in Successfully!')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }

        }else{
            echo "<script>alert('Invalid credentials')</script>";
        }
    }else{
        echo "<script>alert('Invalid credentials')</script>";
    }

}

?>