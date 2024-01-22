<?php
    require_once('requiredb.php');
    $productItem =  "SELECT * FROM storeproduct JOIN productcategor ON storeproduct.idcategory = productcategor.idcategory";
    $result = mysqli_query($mysqli, $productItem);

    
    for ($i = 0; $i < 4 && $row = mysqli_fetch_assoc($result); $i++) {
        echo '<div class="our-products__item">';
        echo "<div class='our-products-image'><img src='img/{$i}_image_product.png' alt='ProductsPhoto'></div>";
        echo '<div class="our-product-content">';
        echo "<div class='title-product-category'><h3>{$row['categoryname']}</h3></div>";
        echo "<div class='title-product'><p>{$row['productname']}</p></div>";
        echo "<div class='product-price'><h4>{$row['productprice']}</h4></div>";
        echo '</div>';
        echo '</div>';
    }
?>