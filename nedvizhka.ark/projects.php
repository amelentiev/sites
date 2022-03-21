<?php include ('controllers/views/head.php')?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid newContainer">
        <a class="navbar-brand" href="index.php"><img class="img-fluid" src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.php">Проекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contacts">Контакты</a>
                </li>
            </ul>
            <ul class="navbar-nav langMenu mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">RU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="portfolioPage">
     <div class="container-fluid">
         <div class="row">
             <div class="col-md-4 col-xl-4 p-0">
                 <a class="" href="project-page.php">
                     <div class="projectCard">
                         <h1 class="textBorder text-center">Project Title</h1>
                         <div class="darkened">
                             <img class="img-fluid" src="img/portfolio/exampleImg.png">
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-xl-4 p-0">
                 <a class="" href="project-page.php">
                     <div class="projectCard">
                         <h1 class="textBorder text-center">Project Title</h1>
                         <div class="darkened">
                             <img class="img-fluid" src="img/portfolio/exampleImg.png">
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-xl-4 p-0">
                 <a class="" href="project-page.php">
                     <div class="projectCard">
                         <h1 class="textBorder text-center">Project Title</h1>
                         <div class="darkened">
                             <img class="img-fluid" src="img/portfolio/exampleImg.png">
                         </div>
                     </div>
                 </a>
             </div>
             <div class="col-md-4 col-xl-4 p-0">
                 <a class="" href="project-page.php">
                     <div class="projectCard">
                         <h1 class="textBorder text-center">Project Title</h1>
                         <div class="darkened">
                             <img class="img-fluid" src="img/portfolio/exampleImg.png">
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script rel="script" type="text/javascript" src="frameworks/bootstrap/js/bootstrap.min.js"></script>
<script rel="script" type="text/javascript" src="js/main.js"></script>
</html>