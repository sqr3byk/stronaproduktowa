<?php
  $page = basename($_SERVER["SCRIPT_FILENAME"]);
?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://195239.sokrates.edu-cloud.uek.krakow.pl/stronaproduktowa/start.php">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($page=='start.php') echo 'active';?>">
              <a class="nav-link" href="http://195239.sokrates.edu-cloud.uek.krakow.pl/stronaproduktowa/start.php">
                Start
              </a>
            </li>
            <li class="nav-item <?php if($page=='specyfikacja.php') echo 'active';?> ">
              <a class="nav-link" href="http://195239.sokrates.edu-cloud.uek.krakow.pl/stronaproduktowa/specyfikacja.php">
                Specyfikacja
              </a>
            </li>
            <li class="nav-item <?php if($page=='kontakt.php') echo 'active';?>">
              <a class="nav-link" href="http://195239.sokrates.edu-cloud.uek.krakow.pl/stronaproduktowa/kontakt.php">
                Kontakt
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
