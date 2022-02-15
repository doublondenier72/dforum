<?php

require_once('php/includes.php');

if(($configurate) == false ){
    header("Location: install.php");
}

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $websitename ?> - Accueil</title>
    <link rel="shortcut icon" href="img/defaultfavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
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
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">Link</a>
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
             <li class="nav-item">
               <a class="nav-link disabled">Disabled</a>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
        </div>
      
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">

                    <div class="ibox-content m-b-sm border-bottom">
                        <div class="p-xs">
                            <h2>Welcome to our first forum</h2>
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

                        <div class="forum-item active">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-shield"></i>
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
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Introductions</a>
                                    <div class="forum-sub-title">New to the community? Please stop by, say hi and tell us a bit about yourself. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        890
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        120
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        154
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item active">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Announcements</a>
                                    <div class="forum-sub-title">This forum features announcements from the community staff. If there is a new post in this forum, please check it out. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        680
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        124
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        61
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Staff Discussion</a>
                                    <div class="forum-sub-title">This forum is for private, staff member only discussions, usually pertaining to the community itself. </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1450
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        652
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        572
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
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bomb"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">There are many variations of passages</a>
                                    <div class="forum-sub-title"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the . </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        1766
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        321
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        42
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-bookmark"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">The standard chunk of Lorem Ipsum</a>
                                    <div class="forum-sub-title">Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        765
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        90
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        11
                                    </span>
                                    <div>
                                        <small>Posts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="forum-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="forum-icon">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <a href="forum_post.html" class="forum-item-title">Lorem Ipsum, you need to be sure there</a>
                                    <div class="forum-sub-title">Internet tend to repeat predefined chunks as necessary, making this the</div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        2550
                                    </span>
                                    <div>
                                        <small>Views</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        122
                                    </span>
                                    <div>
                                        <small>Topics</small>
                                    </div>
                                </div>
                                <div class="col-md-1 forum-info">
                                    <span class="views-number">
                                        92
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

    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
</body>
</html>