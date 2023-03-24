
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Register</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            b{
                color: white;
                
            }

        </style>


</head>

<body>
    <div class="container-fluid ">
        <h2 class="text-center">		<nav class="navbar navbar-expand-lg navbar-dark bg-info">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link" href="#"><b>Register</b></a>
				</li>

			</ul>
		</nav>
    
    
    </h2>
        <div class="row d-flex aligh-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" b method="post" enctype="multipart/form-data">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username"
                            name="user_username" required>
                    </div>
                    <!-- email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">email</label>
                        <input type="email" id="user_email" class="form-control" placeholder="Enter your Email"
                            name="user_email" required>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Held education level</label>
                        <select name="product_brands" id="" class="form-select">

                          
                           
                            <option value="">Select Education Level</option>
                            <option value="">O'Level</option>
                            <option value="">AdvancedLevel</option>
                            <option value="">Bachelor's</option>
                            <option value="">Graduate</option>


                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Career Interest</label>
                        <select name="product_brands" id="" class="form-select">

                           
                            <option value="">Select Career Interest</option>
                            <option value="">Intest A</option>
                            <option value="">Intest B</option>
                            <option value="">Interest C</option>
                            <option value="">Intesest...X</option>


                        </select>
                    </div>
                    <!-- user_password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password"
                            name="user_password" required>
                    </div>
                    <!-- confirm user_password field -->
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" id="conf_user_password" class="form-control"
                            placeholder="confirm password" name="conf_user_password" required>
                    </div>
                    <!-- Address field -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" placeholder="Enter your Address"
                            name="user_address" required>
                    </div>
                    <!-- contact field -->
                    <div class="form-outline mb-4">

                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" placeholder="Enter your mobile number"
                            name="user_contact" required>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                        <p class="smaill fw-bold mt-2 pt-1">Already have an account?<a href="user_login.php"
                                class="text-danger"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<!-- php code -->

<?php
if (isset($_POST['user_register'])) {
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $password_hash = password_hash($user_password, PASSWORD_DEFAULT);
    $conf_user_password = $_POST['conf_user_password'];
    $user_address = $_POST['user_address'];
    $user_contact = $_POST['user_contact'];

    // for image

    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];

    $user_ip = getIPAddress();

    // select query
    $seelect_queryi = "select * from user_table where username='$user_username' or user_email='$user_email'";

    $result = mysqli_query($con, $seelect_queryi);
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0) {
        echo "<script>alert('Username or e-mail already exist!')</script>";
    } elseif ($user_password != $conf_user_password) {
        echo "<script>alert('The passwords do not match!')</script>";
    } else {
        // insert query
        move_uploaded_file($user_image_tmp, "./user_images/$user_image");
        $insert_query = "insert into user_table (username,user_email,user_password,user_image,user_ip,
    user_address,user_mobile) values('$user_username','$user_email','$password_hash',' $user_image',
    '$user_ip','$user_address','$user_contact')";

        $sql_excute = mysqli_query($con, $insert_query);


    }

    //   selecting cart items for reminding the user.
    $select_cart_items = "select * from cart_details where ip_adress='$user_ip'";
    $result_query = mysqli_query($con, $select_cart_items);
    if ($rows_count > 0) {
        $_SESSION['username'] = $user_username;
        echo "<script>alert('You have items cart!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    } else {
        echo "<script>window.open('../index.php','_self')</script>";
    }
}
?>