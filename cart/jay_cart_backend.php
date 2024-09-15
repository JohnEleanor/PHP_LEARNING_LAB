<?php 
    session_start();
    print("<pre>");
    // session_id(); // ตรวจสอบ session id
    // print(session_id());
    print_r($_SESSION);
    print_r($_POST);
    print("</pre>");

    if (isset($_POST['clear_session'])) {
    
        session_destroy();
        header("Location: jay_cart.php"); 
    }else if (isset($_POST['add_product'])) {
        // เพิ่มสินค้าในตะกร้า
        $product_id = $_POST['product_id'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    
        $_SESSION['cart'][] = $product_id;
            
      
    
        header("Location: jay_cart.php"); 
    }else if (isset($_POST['delete_id'])) {
        // ลบสินค้าในตะกร้า
        $delete_product_id = $_POST['delete_product_id'];
        unset($_SESSION['cart'][$delete_product_id]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        header("Location: jay_cart.php"); 
    }
?>
