
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Opportunity</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file-->
    <link rel="stylesheet" href="../style.css">
</head>
<style>
    a{
        color: white;
    }
</style>

<body class="bg-light mt-3">
    <div class="container">
        <h1 class="text-center"><nav class="navbar navbar-expand-lg navbar-dark bg-info d-flex">
			<ul class="navbar-nav me-auto d-flex">
				<li class="nav-item text-center  d-flex">
					<a class="nav-link text-center d-flex" href="#"><b>Post an Opportunity</b></a>
				</li>

			</ul>
		</nav></h1>
        <!-- form -->

        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">
                    Opportunity title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter product title" autocomplete="off" required>
            </div>
            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label">
                    Opportunity Description
                </label>
                <input type="text" name="Description" id="Description" class="form-control"
                    placeholder="Enter opportunity Description" autocomplete="off" required>
            </div>
            <!-- Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_keywords" class="form-label">
                    Opportunity keywords
                </label>
                <input type="text" name="Product_keywords" id="Product_keywords" class="form-control"
                    placeholder="Enter Opportunity keywords" autocomplete="off" required>
            </div>
            <!--Categories -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="Description" class="form-label">
                    Category
                </label>
                <select name="product_categories" id="" class="form-select" placeholder="Select Category">

                         <option value="">Select category</option>
                        <option value="">Category A</option>
                        <option value="">Category B</option>
                        <option value="">Category C</option>
                        <option value="">Category D</option>


                </select>

            </div>
            <!-- Brands -->
            <!-- <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">

                    <?php
                    // $select_query = "select * from brands";
                    // $result_query = mysqli_query($con, $select_query);
                    // while ($row = mysqli_fetch_assoc($result_query)) {
                    //     $brand_title = $row['brand_title'];
                    //     $brand_id = $row['brand_id'];

                    //     echo "<option value='' disabled selected hidden>Select Brand</option>";
                    //     echo "<option value='$brand_id'>$brand_title</option>";

                    // }
                    ?>
                    <option value="">Select brand</option>
                        <option value="">Electronic</option>
                        <option value="">Clothe</option>
                        <option value="">Vehicle</option>
                        <option value="">Jewelery</option> 


                </select>
            </div> 
            <!--Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Related image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>
            <!--Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Related image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>
            <!--Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Related image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>
            <!-- Price -->
            <!-- <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_price" class="form-label">
                    Product price
                </label>
                <input type="text" name="Product_price" id="Product_price" class="form-control"
                    placeholder="Enter Product price" autocomplete="off" required>
            </div> -->
    </div>
    <!-- Submit -->
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-info" value="Submit">
    </div>


    <!-- enctype="multipart/form-data"  is for enabling us to insert PICTURES-->
    </div>
</body>

</html>