<?php
    require_once('requiredb.php');
    $productItem =  "SELECT * FROM storeproduct JOIN productcategor ON storeproduct.idcategory = productcategor.idcategory";
    $result = mysqli_query($mysqli, $productItem);
    if ($userRole == null){
        $userRole = 'guest';
    }
    for ($i = 0; $i < 4 && $row = mysqli_fetch_assoc($result); $i++) {
        echo '<div class="our-products__item">';
        echo "<div class='our-products-image'><img src='img/{$i}_image_product.png' alt='ProductsPhoto'> </div>";
        
        if ($userRole == 'user'){
            echo "<div class='button-product user' data-product-id='{$i}'> <button>add to cart</button> </div>";
        }
        elseif ($userRole == 'admin'){
            // Добавляем кнопку для админа, которая направляет на другой ресурс
            echo "<div class='button-product guest' data-product-id='{$i}'> <button><a href='http://localhost/phpmyadmin/'>Edit Product</a></button> </div>";
        }
        elseif ($userRole == 'guest'){
            // Добавляем кнопку для гостя, которая направляет на страницу login_page.php
            echo "<div class='button-product guest' data-product-id='{$i}'> <button><a href='login_page.php'>add to cart</a></button> </div>";
        }
        
        echo '<div class="our-product-content">';
        echo "<div class='title-product-category'><h3>{$row['categoryname']}</h3></div>";
        echo "<div class='title-product'><p>{$row['productname']}</p></div>";
        echo "<div class='product-price'><h4>₹{$row['productprice']} </h4></div>";
        echo '</div>';
        echo '</div>';
    }
?>