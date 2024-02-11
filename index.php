<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="refresh" content="300" name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AMU-Whispers</title>
  <link rel="stylesheet" href="./static/style.css" />

</head>

<body>
  <main>
    <header id="header">
      <?php
      require_once "./partials/common/nav.php";
?>

      <div class="header-content">
        <div class="container grid-2">
          <div class="column-1">
            <h1 class="header-title">AMU-Whispers!</h1>
            <p class="text">
              Post Anonymously to your Campus Buddies..!!
              <br /><br />
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, nemo obcaecati! Illo animi asperiores architecto ipsum dolor molestiae, repudiandae, facilis unde labore, sequi debitis? Quod aliquam cum accusamus maxime repudiandae!
            </p>
            <br />

            <?php
          $boolLoggedIn = false;
          if (isset($_SESSION) and isset($_SESSION['username'])) {
              $boolLoggedIn = true;
              $currentUser = $_SESSION['username'];
               
          }
            if ($boolLoggedIn) {
              $signUpBlock = "<a href='$userProfile' class='btn'>Apply Insurance</a>";
              echo $signUpBlock;
            } else {
              echo $signUpBlock;
            }
            ?>

          </div>

          <div class="column-2 image">
            <img src="./static/img/person.svg" class="img-element z-index" alt="" />
          </div>
        </div>
      </div>
    </header>


<!-- =======================================About container===================================================-->

    <section class="about section" id="about">
      <div class="container">
        <div class="section-header">
          <h3 class="title" data-title="About">AMU-Whispers</h3>
        </div>

        <div class="section-body grid-2">
          <div class="column-1">
            <h3 class="title-sm">What is AMU-Whispers?</h3>
            <p class="text">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, vitae cumque! Sunt numquam tempore dicta, perferendis libero praesentium nihil possimus quibusdam consequuntur ex excepturi et provident alias maxime, quos commodi.
            </p>
            <br />
            <h3 class="title-sm">How to use?</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatibus nihil aliquam nostrum voluptas nam optio praesentium provident nesciunt. Magni blanditiis inventore unde veniam vel quos. Dolorum corporis omnis dolorem?
            </p>
            <br />

            <h3 class="title-sm">Why Anonymously?</h3>
            <p class="text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut at dolor animi non ratione corrupti illum aut temporibus nesciunt minima explicabo, porro iusto quisquam laborum maiores doloribus? Dolore, atque libero!
            </p>
            <br />
            <h3 class="title-sm">Features</h3>
            <div class="skills">
              <div class="skill html">
                <h3 class="skill-title">Easy to use</h3>
                <div class="skill-bar">
                  <div class="skill-progress" data-progress="98.6%"></div>
                </div>
              </div>
              <div class="skill css">
                <h3 class="skill-title">Be Connected</h3>
                <div class="skill-bar">
                  <div class="skill-progress" data-progress="90.6%"></div>
                </div>
              </div>
              <div class="skill js">
                <h3 class="skill-title">Privact</h3>
                <div class="skill-bar">
                  <div class="skill-progress" data-progress="98.4%"></div>
                </div>
              </div>
            </div>
            <a href="https://www.who.int/health-topics/coronavirus#tab=tab_3" target="blank" class="btn">More Info</a>
          </div>

          <div class="column-2 image">
            <img src="./static/img/about1.svg" alt="" /><br /><br />
            <img src="./static/img/about2.svg" alt="" />
          </div>
        </div>
      </div>
    </section>


  <!-- ==================================== Footer ====================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-links">
        <h3 class="title-sm">Links</h3>
        <a href="https://www.who.int/health-topics/coronavirus#tab=tab_3">Covid-19</a>
        <a href="https://www.who.int/">WHO</a>
        <a href="https://www.worldometers.info/coronavirus/">Covid Cases</a>
        <a href="https://www.cowin.gov.in/">Covid vacine</a>
        <a href="https://www.youtube.com/watch?v=5gRFVZcUvlY">Importance of Insurance</a>
        <a href="#">Our Policies</a>
        <p class="text">Copyright &copy; 2022 All rights reserved</p>    

      </div>

    </div>
    <div class="followme-wrap">
      <div class="followme">
        <div class="social-media">
          <a href="https://github.com/shujaurrahman">
            <i class="fa fa-brands fa-github"></i>
          </a>
          <a href="https://shujaurrahman.github.io/shuja-on-web/">
            <i class="fas fa-solid fa-globe"></i>
          </a>
          <a href="https://www.instagram.com/shujaurrahman_/">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>

      <div class="back-btn-wrap">
        <a href="#" class="back-btn">
          <i class="fas fa-chevron-up"></i>
        </a>
      </div>
    </div>
  </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="static/js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>