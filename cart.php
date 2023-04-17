<!DOCTYPE html>
<html lang="en">
    <head>
        <title>cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!--=============== REMIXICONS ===============-->
         <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <style>
            <?php include '../css/styles.css';
            ?>
        </style>
    </head>
    <body>

    <div class="cart__container container grid">
        <div class="cart__content">
            <div class="cart__img__box">
                <img src="../img/halfkitkat.png" alt="" class="cart__img gallery__img">
            </div>
            <span class="cart__line"></span>
            <div class="detail__box">
                <div class="cart__product__title">KitKat</div>
                <div class="cart__price">$25.04</div>
                <input type="number" value="1" class="cart__quantity">
            </div>
            <div class="cart__itm__remove">
            <i class="ri-delete-bin-5-fill cart__remove"></i>
            </div>
        </div>

        <div class="total">
            <div class="total__title">Total</div>
            <div class="total__price">$10</div>
        </div>
        <button type="button" class="btn__buy button">Buy Now</button>
    </div>




    <script><?php include "../js/cart.js"; ?></script>
    <!-- <?php include 'dbconnect.php';?> -->
    <!-- <?php  
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://";   
        else  
            $url = "http://";   
        $url.= $_SERVER['HTTP_HOST'];      
        $url.= $_SERVER['REQUEST_URI'];    
    ?>   

    <?php
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $len=count($queries);
        for($i=0;$i<=$len-1;$i++){
            $id = $_GET[$i];
            $sql = "SELECT * FROM `offer_list` WHERE product_id = $id"; 
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['product_name'];
                echo '<h1>'.$title.'</h1>';
            }
        }   
    ?> -->
    </body>
</html>