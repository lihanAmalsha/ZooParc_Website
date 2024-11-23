<?php
    require_once('connection.php');
    
    ?>
<?php
    $query = "SELECT * FROM detailedevents";
    $result = mysqli_query ($conn , $query);
    
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZooPark Zological Park</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="sub-header-memberEvents">
      <nav>
        <div class="logo"><a href="index.html">ZooParc</a></div>
        <div class="nav-links">
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="animals.html">ANIMALS</a></li>
            <li><a href="memberRegistration.html">MEMBER REGISTRATION</a></li>
            <li><a href="events.html">EVENTS</a></li>
            <li><a href="food.html">FOOD OUTLETS</a></li>
            <li><a href="admin.html">ADMIN</a></li>
            <li><a href="volunteer.html">VOLUNTEER</a></li>
          </ul>
        </div>
      </nav>
      <h1>Detailed Events</h1>
    </section>

    <!-----this is the member events content section----->


    <section class="events">
      <h1>Upcoming Events</h1>
        <?php
        while($record = mysqli_fetch_assoc($result)){
        ?>
      <div class="event-container">
        <div class="event-col">
          <img src="images/unique panda.jpg" alt="unique panda" />
          <h3><?php echo $record ['Event_Name'];?></h3>
          <p>
          <?php echo $record['Discription'];?>
          </p>
        </div>
        <?php
        }
        ?>
        <div class="event-col">
          <img src="images/a night safari.jpg" alt="a night safari" />
          <h3>A Night Safari Adventure</h3>
          <p>
            This exclusive night safari, available to registered members, allows
            you to explore the zoo after hours. Take a guided walk to explore
            the park's nocturnal fauna, which provides unique insights into
            animal behavior after dark.
          </p>
        </div>
        <div class="event-col">
          <img src="images/conversation.jpg" alt="giraffes" />
          <h3>Every Year Gala for Conservation</h3>
          <p>
            Come celebrate the Annual Conservation Gala with us on a classy
            evening. In addition to hearing about our most recent conservation
            initiatives and participating in a silent auction with money going
            toward wildlife preservation, enjoy a formal supper.
          </p>
        </div>
        <br />
        <div class="event-col">
          <img src="images/zoo keepers.jpg" alt="zoo keepers" />
          <h3>An Entire Day of Zoo Keepers</h3>
          <p>
            Experience working directly with animals for a day as a zookeeper!
            In order to gain an insider's perspective of the day-to-day workings
            of the zoo, registered members are invited to work alongside our
            staff, helping with animal care, feeding, and habitat upkeep.
          </p>
        </div>
        <div class="event-col">
          <img src="images/breakfast.jpg" alt="breakfast" />
          <h3>Breakfast of appreciation</h3>
          <p>
            We are thanking you in advance by offering registered members a
            special breakfast event. Enjoy a delectable dinner, make new
            friends, and get firsthand information from ZooParc's leadership
            team about forthcoming events and projects.
          </p>
        </div>
      </div>
    </section>

    <!-----this is the price section----->

    <section class="pricing">
      <h1>Ticket Pricing</h1>
      <div class="pricing-container">
        <div class="pricing-col">
          <img src="images/child.jpg" alt="Child " />
          <h3>Child (under the age of 15)</h3>
          <p>$10 per child</p>
        </div>
        <div class="pricing-col">
          <img src="images/adult.jpg" alt="Adult " />
          <h3>Adult(male and female)</h3>
          <p>$20 per adult</p>
        </div>
        <div class="pricing-col">
          <img src="images/family.jpg" alt="Family " />
          <h3>Family</h3>
          <p>$50 for a family of four</p>
        </div>
      </div>
    </section>

    <!-----this is the footer section----->

    <footer>
      <div class="footer-container">
        <div class="footer-section links">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="animals.html">Animals</a></li>
            <li><a href="memberRegistration.html">Member Registration</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="food.html">Food Outlets</a></li>
            <li><a href="admin.html">Admin</a></li>
            <li><a href="volunteer.html">Volunteer</a></li>
          </ul>
        </div>
        <div class="footer-section contact">
          <h3>Contact Us</h3>
          <p>
            <i class="fas fa-map-marker-alt"></i> 123 ZooParc Lane, Wildlife
            City, Country
          </p>
          <p><i class="fas fa-phone"></i> +123 456 7890</p>
          <p><i class="fas fa-envelope"></i> info@zooparc.com</p>
        </div>
        <div class="footer-section social">
          <h3>Follow Us</h3>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 ZooParc Zoological Park. All rights reserved.</p>
      </div>
    </footer>
  </body>
  <script>
    window.location.href = "memberEvents.html";
    return false;
  </script>
</html>
