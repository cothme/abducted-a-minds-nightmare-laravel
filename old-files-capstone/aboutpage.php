<link rel="stylesheet" href="css/aboutpage.css">
<?php include "header.php" ?>
<?php include "navbar.php"?>
<?php
include 'php/config.php';
$sql = 'SELECT * FROM about_page_elements WHERE content_category = "about_text"';
$result = mysqli_query($conn,$sql);
$contents = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $contents[] = $row;
    }
}
$sql = 'SELECT * FROM about_page_elements WHERE content_category = "client"';
$result = mysqli_query($conn,$sql);
$client_details = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $client_detail[] = $row;
    }
}
$sql = 'SELECT * FROM about_page_elements WHERE content_category = "images"';
$result = mysqli_query($conn,$sql);
$images = array();
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row;
    }
}
?>
<body class="wrapper">
    <div class="container-fluid about-text about-section_1">
        <?php foreach($contents as $content): ?>
        <?php echo html_entity_decode($content['content_title']) ?>
        <?php echo html_entity_decode($content['content']) ?>
        <?php endforeach ?>     
    </div>
    <div class="container-fluid about-text about-section_2">
        <h1 class="title-2">CHARACTERS</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($images as $image) : ?>
                <div class="col-md-6">
                    <img src=<?php echo $image['content'] ?> class="img-fluid p-3">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container-fluid about-text about-section_2">
        <h1 class="title-2">OUR CLIENT</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center about-text">
                <img src=<?php echo $client_detail[0]['content_title']; ?> class="img-fluid p-3 client-logo p-3" width="250px">
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center client-text p-3">
            <?php echo $client_detail[0]['content']; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid about-text about-section_2">
        <h1 class="title-2">THE DEVELOPERS</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                <div class="developer-container text-center p-3">
                    <img class="img-fluid dev-img" src="images/1x1_Baguyo.jpg" alt="Card image cap">
                    <h1 class="dev-text">Mark Baguyo</h1>
                    <div class="dev-text2">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-dark text-center">Project Manager</li>
                            <li class="list-group-item text-white bg-dark text-center">3D Artist</li>
                            <li class="list-group-item text-white bg-dark text-center">Animator</li>
                        </ul>
                    </div>
                    <div class="dev-text3 p-3">
                        <a href="https://www.facebook.com/markbananaa" class="p-3">
                            <img class="img-fluid dev-icon" src="images/fb_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://github.com/MarkBanana26" class="p-3">
                            <img class="img-fluid dev-icon" src="images/github_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://www.facebook.com/markbananaa" class="p-3">
                            <img class="img-fluid dev-icon" src="images/linkedin_icon.svg" alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                <div class="developer-container">
                    <img class="img-fluid dev-img" src="images/1x1_Cosme.jpg" alt="Card image cap">
                    <h1 class="dev-text">Migui Cosme</h1>
                    <div class="dev-text2">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-dark text-center">Game Programmer</li>
                            <li class="list-group-item text-white bg-dark text-center">Web Developer</li>
                            <li class="list-group-item text-white bg-dark text-center">Level Designer</li>
                        </ul>
                    </div>
                    <div class="dev-text3 p-3">
                        <a href="https://www.facebook.com/miguicothme/" class="p-3">
                            <img class="img-fluid dev-icon" src="images/fb_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://github.com/cothme" class="p-3">
                            <img class="img-fluid dev-icon" src="images/github_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://www.linkedin.com/in/migui-cosme/" class="p-3">
                            <img class="img-fluid dev-icon" src="images/linkedin_icon.svg" alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                <div class="developer-container">
                    <img class="img-fluid dev-img" src="images/1x1_Gaffud.jpg" alt="Card image cap">
                    <h1 class="dev-text">Glen Gaffud</h1>
                    <div class="dev-text2">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-dark text-center">3D Artist</li>
                            <li class="list-group-item text-white bg-dark text-center">Web Developer</li>
                            <li class="list-group-item text-white bg-dark text-center">Texture Artist</li>
                        </ul>
                    </div>
                    <div class="dev-text3 p-3">
                        <a href="https://www.facebook.com/glennmichael.gaffud" class="p-3">
                            <img class="img-fluid dev-icon" src="images/fb_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://github.com/GlennGaffud" class="p-3">
                            <img class="img-fluid dev-icon" src="images/github_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://www.facebook.com/glennmichael.gaffud" class="p-3">
                            <img class="img-fluid dev-icon" src="images/linkedin_icon.svg" alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center p-3 dev-2">
                <div class="developer-container">
                    <img class="img-fluid dev-img" src="images/1x1_Peng.jpg" alt="Card image cap" style="max-width: 300px;">
                    <h1 class="dev-text">Stephen Peng</h1>
                    <div class="dev-text2">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-dark text-center">Environment Artist</li>
                            <li class="list-group-item text-white bg-dark text-center">3D Artist</li>
                            <li class="list-group-item text-white bg-dark text-center">Level Designer</li>
                        </ul>
                    </div>
                    <div class="dev-text3 p-3">
                        <a href="https://www.facebook.com/stephen.v.peng" class="p-3">
                            <img class="img-fluid dev-icon" src="images/fb_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://github.com/stephenpeng62" class="p-3">
                            <img class="img-fluid dev-icon" src="images/github_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://www.facebook.com/stephen.v.peng" class="p-3">
                            <img class="img-fluid dev-icon" src="images/linkedin_icon.svg" alt="Card image cap">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center p-3 dev-2">
                <div class="developer-container">
                    <img class="img-fluid dev-img" src="images/1x1_Torres.jpg" alt="Card image cap" style="max-width: 300px;">
                    <h1 class="dev-text">Jayson Torres</h1>
                    <div class="dev-text2">
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item text-white bg-dark text-center">Rigger</li>
                            <li class="list-group-item text-white bg-dark text-center">3D Modeler</li>
                            <li class="list-group-item text-white bg-dark text-center">Documentation</li>
                        </ul>
                    </div>
                    <div class="dev-text3 p-3">
                        <a href="https://www.facebook.com/J.lctrs" class="p-3">
                            <img class="img-fluid dev-icon" src="images/fb_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://github.com/Kwatroooo" class="p-3">
                            <img class="img-fluid dev-icon" src="images/github_icon.svg" alt="Card image cap">
                        </a>
                        <a href="https://www.facebook.com/J.lctrs" class="p-3">
                            <img class="img-fluid dev-icon" src="images/linkedin_icon.svg" alt="Card image cap">
                        </a>
                    </div>
                </div>
        </div>
    </div>
    </div>
<?php include "footer.php"?>
</body>
