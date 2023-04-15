<!DOCTYPE html>
<html>
<head>
	<title>Sample Website</title>
	<link rel="stylesheet" type="css style" href="style.css">
</head>
    <body>
        <?php include("./header.php");?>
        <?php 
        $shirts = [
            ['name' => "Pant", 'price' => '$59', 'image' =>'pictures/pant.jpeg'],
            ['name' => "T-shirt", 'price' => '$60', 'image' =>'pictures/Tshirt.webp']

          ];

          foreach ($shirts as $shirt) {
            echo '<div class="shirt">';
            echo '<img src="' . $shirt['image'] . '" alt="' . $shirt['name'] . '">';
            echo '<h3>' . $shirt['name'] . '</h3>';
            echo '<p>' . $shirt['price'] . '</p>';
            echo '<button>Add to Cart</button>';
            echo '</div>';
          }
        ?>
        <?php include("./footer.php")?>
    </body>
</html>