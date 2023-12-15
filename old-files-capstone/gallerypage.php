<link rel="stylesheet" href="css/gallerypage.css">
<?php include "header.php" ?>
<?php include "navbar.php"?>
<?php 
include 'php/config.php';
$sql = 'SELECT * FROM gallery_page_elements WHERE content_category = "concept_art"';
$result = mysqli_query($conn,$sql);
$concept_arts = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $concept_arts[] = $row;
    }
}
$sql = 'SELECT * FROM gallery_page_elements WHERE content_category = "environment"';
$result = mysqli_query($conn,$sql);
$environments = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $environments[] = $row;
    }
}
$sql = 'SELECT * FROM gallery_page_elements WHERE content_category = "char_model"';
$result = mysqli_query($conn,$sql);
$char_models = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $char_models[] = $row;
    }
}
?>
<body class="wrapper">
<div class="container vid-container">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/k8quXxvxi3w" title="ABDUCTED: A Mind&#39;s Nightmare Game Teaser" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<div class="container-fluid about-text about-section_2">
    <h1 class="title-2">CONCEPT ARTS</h1>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div id="myCarousel" class="carousel slide" data-bs-ride="false">
        <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <?php for($i = 1; $i < count($concept_arts); $i++): ?>
          <li data-bs-target="#myCarousel" data-bs-slide-to='<?php echo $i; ?>'></li>
          <!-- <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li> -->
          <?php endfor; ?>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src='<?php echo $concept_arts[0]['content'] ?>'class="d-block w-100">
          </div>
          <?php for($i = 1; $i < count($concept_arts); $i++): ?>
            <div class="carousel-item">
            <img src='<?php echo $concept_arts[$i]['content'] ?>' alt="Alex" class="d-block w-100">
          </div>
          <?php endfor; ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
    <div class="container-fluid about-text about-section_2">
        <h1 class="title-2">CHARACTER 3D MODELS</h1>
    </div>
    <div class="container-fluid">
    <div class="image-container">
        <?php foreach ($char_models as $model): ?>
            <div class="image" style="overflow: hidden;">
                <img src="<?php echo $model['content']; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <div class="popup-img">
        <span>&times;</span>
        <img src="" alt="" class="pop-img">
    </div>
</div>
    <div class="container-fluid about-text about-section_2">
        <h1 class="title-2">ENVIRONMENT</h1>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-center p-3">
      <div class="col-md-8">
        <div id="myCarousel2" class="carousel slide" data-bs-ride="false">
          <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active"></li>
          <?php for($i = 1; $i < count($environments); $i++): ?>
          <li data-bs-target="#myCarousel2" data-bs-slide-to='<?php echo $i; ?>'></li>
          <!-- <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li> -->
          <?php endfor; ?>
          </ol>
          <div class="carousel-inner">
          <div class="carousel-item active">
              <img src='<?php echo $environments[0]['content'] ?>'class="d-block w-100">
            </div>
            <?php for($i = 1; $i < count($environments); $i++): ?>
              <div class="carousel-item">
              <img src='<?php echo $environments[$i]['content'] ?>' alt="Alex" class="d-block w-100">
            </div>
            <?php endfor; ?>
          </div>
          <a class="carousel-control-prev" href="#myCarousel2" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel2" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
    </div>
    </div>
    </div>
    <script>
        document.querySelectorAll('.image-container img').forEach(image => {
            image.onclick = () => { 
              document.querySelector('.popup-img').style.display = 'block';
              document.querySelector('.popup-img img').src = image.getAttribute('src');
             }
        });
        document.querySelector('.popup-img span').onclick = () => { document.querySelector('.popup-img').style.display = 'none'; }

    </script>
<?php include "footer.php" ?>
</body>
