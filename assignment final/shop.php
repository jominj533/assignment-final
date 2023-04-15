<!DOCTYPE html>
<html>
<head>
	<title>Sample Website</title>
	<link rel="stylesheet" type="css style" href="style.css">
</head>
    <body>
        <?php include("./header.php");?>
        <?php 
        $products = [
            ['name' => "Men's Shirt", 'price' => '$29.99', 'image' => 'pictures/image1.jpg'],
            ['name' => "Women's Dress", 'price' => '$49.99', 'image' => 'pictures/image2.jpg'],
            ['name' => "Children's Jacket", 'price' => '$39.99', 'image' => 'pictures/image3.jpg']
          ];

          foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['price'] . '</p>';
            echo '<button>Add to Cart</button>';
            echo '</div>';
          }
        ?>
        <?php include("./footer.php")?>
    </body>
</html>