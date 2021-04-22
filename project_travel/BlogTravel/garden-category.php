<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>AT - BlogTravel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="BlogTravel/css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="BlogTravel/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="BlogTravel/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="BlogTravel/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="BlogTravel/css/colors.css" rel="stylesheet">

    <!-- Version Garden CSS for this template -->
    <link href="BlogTravel/css/version/garden.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.pinterest.com/" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="https://twitter.com/login?lang=vi" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
                            <a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.google.com.vn/?hl=vi" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="padding-right: 50px;"><i class="fa fa-search" ></i> Search</a>
                            <?php 
                                    if (!isset($_SESSION['auth'])) {
                                       echo('<img style="height: 20px; width: 20px;" src="public/img/login.png" alt="">
                                        <a class="collapse-item" href="index.php?admin=auth&mod=login&act=loginForm">Login</a>');
                                    }else{
                                         echo('<img style="height: 32px; width: 32px;" src="public/img/home.png" alt="">
                                            <a class="collapse-item" href="index.php?admin=auth&mod=login&act=loginForm">Trang Admin</a>');
                                    }
                                 ?>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="garden-index.html"><img src="BlogTravel/images/version/logo.png" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu" aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="index.php?admin=userBlog&mod=home&act=list">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="index.php?admin=userBlog&mod=home&act=detail&id=9">Content</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="index.php?admin=userBlog&mod=home&act=listPost">Blog Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="?admin=userBlog&mod=home&act=contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Category by: <?= $category['name']?></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Gardening</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                                <?php 
                                    foreach ($data as $key => $value) { ?>

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="public/img/postImg/<?= $value['thumbnail'] ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="garden-category.html" title=""><?= $value['category_name'] ?></a></span>
                                        <h4><a href="index.php?admin=userBlog&mod=home&act=detail&id=<?= $value['id'] ?>" title=""><?= $value['title']?></a></h4>
                                        <p><?= $value['description']?></p>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i><?= $value['view_count']?></a></small>
                                        <small><a href="#" title=""><?= date('d F, Y (l)', strtotime($value['created_at'])) ?></a></small>
                                        <small><a href="#" title="">by <?= $value['user_name']?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            
                                <hr class="invis">
                                <?php } ?>
                                
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <?php 
                                        $i = 2;
                                            foreach ($data as $key => $value) { 
                                            if ($i>=7) {
                                        ?>

                                        <a href="garden-single.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="public/img/postImg/<?= $value['thumbnail'] ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><a href="index.php?admin=userBlog&mod=home&act=detail&id=<?= $value['id'] ?>" title=""><?= $value['description']?></h5>
                                                <small><?= date('d F, Y (l)', strtotime($value['created_at'])) ?></small>
                                            </div>
                                        </a>

                                    <?php } 
                                        $i++; }
                                    ?>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_04.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <?php $i=0;
                                        foreach ($data as $key => $value) {
                                            if($i<=5){
                                     ?>
                                    <a href="#"><img src="public/img/postImg/<?= $value['thumbnail']?>" alt="" class="img-fluid"></a>
                                    <?php } $i++; }?>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                           <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <?php 
                                        foreach ($categories as $key => $value) {
                                     ?>
                                        <li><a href="index.php?admin=userBlog&mod=home&act=listPost&category_id=<?= $value['id']?>"><?= $value['name']?></a></li>
                                    <?php } ?>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                                <a href="index.html"><img src="images/version/garden-footer-logo.png" alt="" class="img-fluid"></a>
                                <p>Forest Time is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-center">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Forest Time. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="BlogTravel/js/jquery.min.js"></script>
    <script src="BlogTravel/js/tether.min.js"></script>
    <script src="BlogTravel/js/bootstrap.min.js"></script>
    <script src="BlogTravel/js/custom.js"></script>

</body>
</html>