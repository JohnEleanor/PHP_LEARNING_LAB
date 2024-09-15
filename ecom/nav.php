
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- <?php print_r($_SESSION); ?> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="view_product_categories.php">ตารางข้อมูลสินค้า</a>
                    </li>
                    
                    <?php 
                    if ($_SESSION["role"] == "admin") {
                        print('
                        <li class="nav-item">
                            <a class="nav-link" href="view_categories.php">categories</a>
                        </li>
                      
                         <li class="nav-item">
                            <a class="nav-link" href="view_customers.php">customers</a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="view_customers.php">customers</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="view_order_items.php">order items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_orders.php">order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_all_orders.php">all orders</a>
                        </li>
                        ');
                    }
                   
                   
                    ?>
                   
               
                </ul>
                <form class="d-flex">
                   
                    <a class="btn btn-danger" href="logout.php">ออกจากระบบ</a>
                </form>
            </div>
        </div>
    </nav>


</body>
</html>