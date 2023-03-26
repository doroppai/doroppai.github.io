<DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content="width=device-width initial-scale=1.0">
        <title>mon site</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        </head>
        <body>
          <br><br><br><br>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="nav nav-pills nav-justified">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kits.php">Kits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="promotions.php">Promotions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">Nouveautés</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produits
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="shampoing.php">Shampoing</a>
            <a class="dropdown-item" href="jantes.php">Jantes & Pneus</a>
            <a class="dropdown-item" href="polissages.php">Polissage & Lustrage</a>
            <a class="dropdown-item" href="textiles.php">Textiles & Plastiques</a>
            <a class="dropdown-item" href="cuir.php">Cuir</a>
            <a class="dropdown-item" href="accessoir.php">Accessoires</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="detailer.php">Detailer</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="pro.php">Packs&nbsppro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="petit.php">Contacts&Newsletter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="propos.php">Notre&nbsphistoire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<p><b>Les meilleurs ventes</b></p>
       <?php
       $images = array(
    "acceuil/image2.png",
    "acceuil/image4.jpg",
    "acceuil/image3.png"
       );
      ?>
      <div class="container">
      <div class="slideshow-container">
    <?php foreach($images as $image) { ?>
        <div class="mySlides">
          <img src="<?php echo $image; ?>">
        </div>
    <?php } ?>
</div>
</div>
<style>
   .slideshow-container{
    height: 400px; /* set a fixed height for all image containers */
    overflow: auto; /* add scrollbars if necessary */
  }
  
  .slideshow-container img {
    height: 100%; /* set the height of the image to 100% of the container */
    width: 100%; /* maintain the aspect ratio of the image */
  }

</style>
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

<p><b>PROMOTIONS</b></p>

<?php
$images = array("image/image2.jpg", "image/image3.webp", "image/image4.png", "image/image5.jpg", "image/image7.png");
?>

<div id="container">
  <div class="scrollable">
    <?php
    foreach ($images as $image) {
      echo '<img src="' . $image . '" alt="' . $image . '" width="300" height="200">';
    }
    ?>
  </div>
</div>
<style>
#container {
  width: 100%;
  overflow-x: scroll;
  white-space: nowrap;
}

.scrollable {
  display: inline-block;
  margin: 10px;
}
</style>

<footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        &copy; 2023 Your Company Name
      </div>
      <div class="col-md-6 text-md-right">
        Made with <i class="fa fa-heart"></i> by Your Name
      </div>
    </div>
  </div>
</footer>

        </body>
        
    </html>
