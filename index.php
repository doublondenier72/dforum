<?php

require_once('php/includes.php');

if(($configurate) == false ){
    header("Location: install.php");
}


$title = $bdd->query('SELECT title FROM config WHERE name = "title"');
$title = $title->fetch(); 



?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $websitename ?> - Home</title>
    <link rel="shortcut icon" href="img/defaultfavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
        <a class="navbar-brand" href="<?= $domainname ?>"><img src="img/defaultfavicon.png" class="mb-1" alt="" width="42px">&nbsp;<?= $websitename ?></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="./home">Home</a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                 Dropdown
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Something else here</a>
               </div>
             </li>
           </ul>
           <a href="" class="btn btn-outline-primary mr-2">Sign Up</a>
           <a href="" class="btn btn-primary">Login</a>
         </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">

                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="p-xs">
                            <h2><?= $title ?></h2>
                            <span>logged in you on the admin dahboard for change this message.</span>
                        </div>
                    </div>

                    <div class="ibox-content forum-container">

                        <div class="forum-title">
                            <div class="pull-right forum-desc">
                                <samll>Total posts: 320,800</samll>
                            </div>
                            <h3>General subjects</h3>
                        </div>

                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">General Discussion</a>
                                    <div class="forum-sub-title">Talk about sports, entertainment, music, movies, your favorite color, talk about enything.</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1216
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        368
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        140
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="forum-title">
                            <div class="pull-right forum-desc">
                                <samll>Total posts: 17,800,600</samll>
                            </div>
                            <h3>Other subjects</h3>
                        </div>

                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Lorem Ipsum is simply dummy text. </a>
                                    <div class="forum-sub-title">Various versions have evolved over the years, sometimes by accident, sometimes on purpose passage of Lorem Ipsum (injected humour and the like).</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1516
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        238
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        180
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start bg-light text-muted mt-5">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h4 class="text-uppercase fw-bold mb-4">
                <img src="img/defaultfavicon.png" class="mb-1" alt="" width="40px"><?= $websitename ?>
              </h4>
              <p>
                Create your environement with the DForum CMS
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Topics
              </h6>
              <p>
                <a href="" class="text-reset">Popular topics</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="" class="text-reset">Pricing</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 - 2023 <?= $websitename ?> | propulsé par DForum
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>