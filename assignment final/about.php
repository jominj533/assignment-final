<!DOCTYPE html>
<html>
  <head>
    <title>About Us</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
  <?php
      include 'header.php';
      ?>
      <h2>About Us</h2>
    <main>
      <section class="abus">
        <h2>Our Story</h2>
       <p>Greetings from our clothing website! We are a group of fashion aficionados that are driven to bring you the most 
        recent fashion industry trends and styles. Our aim is to offer you high-quality clothing that is not only fashionable 
        but also cosy and reasonably priced. Regardless of someone's financial situation, physical characteristics, or preferred 
        style, we think everyone should have access to fashion. Because of this, we provide a wide selection of clothing options to 
        suit various preferences and body types. We have something for everyone, including both traditional and contemporary styles
        as well as fashionable and edgy pieces. Our team is committed to offering outstanding customer service and making sure that 
        your time spent shopping with us is enjoyable.We appreciate you making us your first choice for all of your fashion needs.</p>
      </section>
      <section>
        <h2>Our Team</h2>
        <div class="team">
          <?php
          $team_members = array(
            array(
              'image' => 'pictures/jomin.jpg',
              'name' => 'Jomin'
            ),
            array(
              'image' => 'pictures/nevin.jpg',
              'name' => 'Nevin Reby Thomas'
            ),
            array(
              'image' => 'pictures/akshith.jpg',
              'name' => 'Akshith Rajeev'
            )
          );

          foreach ($team_members as $member) {
            echo '<div class="member">';
            echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '">';
            echo '<h3>' . $member['name'] . '</h3>';
            echo '</div>';
          }
          ?>
        </div>
      </section>
    </main>
    <?php include'./footer.php'?>
  </body>
</html>
