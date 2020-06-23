<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
      <a href="home.php" class="header-brand">mmtuts</a>
      <nav>
        <ul>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="about.html">About me</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="cases.php" class="header-cases">Cases</a>
      </nav>
    </header>
    <main>
      <section class="cases-links">
        <div class="wrapper">
          <h2>Cases</h2>
            <?php
            include_once 'includes/db.inc.php';

            $sql = "select * from gallery ORDER BY ordergellary ASC ;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                echo "SQL statement failed";
            }else{
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<a href="case1.html">
            <div class="cases-link">
                <img src="img/gallery/'.$row["imgfullname"].'" width="236px" height="236px">
              <h3 class="cases-title">'.$row["title"].'</h3>
              <p class="descgellary">'.$row["descgellary"].'</p>
            </div>
          </a>';
                }
            }
            ?>

<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--                <img src="img/gallery/hand.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Nail</h3>-->
<!--              <p class="descgellary">Softly hand</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/teamwork.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Teamwork</h3>-->
<!--              <p class="descgellary">Working together</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/bluesky.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Sky</h3>-->
<!--              <p class="descgellary">Walking on the Sky</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/cascade.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Cascade</h3>-->
<!--              <p class="descgellary">Panorama picture</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/mount.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Mount</h3>-->
<!--              <p class="descgellary">Mount is nice view</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/face.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Face</h3>-->
<!--              <p class="descgellary">It's sexy girl</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/flying.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Flying</h3>-->
<!--              <p class="descgellary">Flying on the Skype</p>-->
<!--            </div>-->
<!--          </a>-->
<!--          <a href="case1.html">-->
<!--            <div class="cases-link">-->
<!--              <img src="img/gallery/countryside.jpg" width="236px" height="236px">-->
<!--              <h3 class="cases-title">Country</h3>-->
<!--              <p class="descgellary">Country side is very beautiful</p>-->
<!--            </div>-->
<!--          </a>-->

        </div>
      </section>

    </main>
    <div class="wrapper">
      <footer>
        <ul class="footer-links-main">
          <li><a href="#">Home</a></li>
          <li><a href="#">Cases</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="footer-links-cases">
          <li><p>Latest cases</p></li>
          <li><a href="#">MALING SHAOLIN - WEB DEVELOPMENT</a></li>
          <li><a href="#">EXCELLENTO - WEB DEVELOPMENT, SEO</a></li>
          <li><a href="#">MMTUTS - YOUTUBE CHANNEL</a></li>
          <li><a href="#">WELTEC - VIDEO PRODUCTION</a></li>
        </ul>
        <div class="footer-sm">
          <a href="#">
            <img src="img/youtube-symbol.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/twitter-logo-button.png" alt="youtube icon">
          </a>
          <a href="#">
            <img src="img/facebook-logo-button.png" alt="youtube icon">
          </a>
        </div>
      </footer>
    </div>
  </body>
</html>
