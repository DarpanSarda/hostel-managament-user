<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from surielementor.com/nuftihtml/popular-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 05:30:28 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>VGEC | Vishwakarma Government Engineering College</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/dist/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/dist/responsive.css">
    
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/home/vgec1.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">

</head>

<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <?php include 'navbar.php' ?>            
            <!-- title page -->
            <section class="flat-title-page inner"> 
                <img class="absolute mark-page" src="assets/images/mark/mark-header-04.png" alt=""> 
                    <img class="absolute mark-page2 animate-rotate" src="assets/images/mark/mark-header-01.png" alt="">
                    <img class="absolute mark-page3" src="assets/images/mark/mark-header-02.png" alt="">
                    <img class="absolute mark-page4" src="assets/images/mark/mark-header-03.png" alt="">
                    <img class="absolute mark-page5" src="assets/images/mark/mark-header-05.png" alt="">      
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading">
                                <h1 class="heading">Popular Collections<span class="text-color-3">.</span></h1>
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>
            <?php
                
                //define total number of results you want per page  
                $results_per_page = 5;  
                 
                //find the total number of results stored in the database  
                $query = "select *from gallery";  
                $result = mysqli_query($con, $query);  
                $number_of_result = mysqli_num_rows($result);  
               
                //determine the total number of pages available  
                $number_of_page = ceil ($number_of_result / $results_per_page);  
               
                //determine which page number visitor is currently on  
                if (!isset ($_GET['page']) ) {  
                    $page = 1;  
                } else {  
                    $page = $_GET['page'];  
                }  
               
                //determine the sql LIMIT starting number for the results on the displaying page  
                $page_first_result = ($page-1) * $results_per_page;  
               
                //retrieve the selected results from database   
                
            ?>
            <div class="tf-section flat-collection dark-style flat-auctions page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-box explore-1 flex-one mb-27">
                                
                        <div class="col-lg-12 col-md-12">
                            <div class="swiper-container carousel-blog show-shadow">
                                <div class="swiper-wrapper slider-style ">     
                                    <?php
                                    while ($row = mysqli_fetch_array($result))
                                    {  
                                    echo"             
                                    <div class='swiper-slide'>
                                        <div class='fl-blog fl-item2'>
                                            <article class='sc-card-article blog-article style-article'>
                                                <div class='flat-tabs card-media media'>                                 
                                                    <div class='content-tab content-img'>
                                                        <div class='content-inner tab-content'>
                                                            <img src='assets/images/home/$row[1]' alt=''>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='post'>
                                                    <div class='text-article'>
                                                        </div>
                                                    <div class='meta-info'>
                                                        <div class='author'>                                                    
                                                            <div class='avatar'>
                                                                <img src='assets/images/avatar/avt-01.png' alt=''>
                                                                <img class='check' src='assets/images/icon/author-check.svg' alt=''>
                                                            </div>
                                                            <div class='info'>
                                                                <h5> By<a class='text-color-3'> $row[2]</a> </h5>
                                                                <div class='date'> $row[3]</div>                                           
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class='item-nft flex-one'>                                                       
                                                            </div>
                                                        </div>                                  
                                                    </div> 
                                                </div> 
                                                                                                                                                             
                                            </article>
                                        </div>
                                        
                                    </div>";
                                    }?>
                                    </div>
                                
                                </div>
                                
                                <div class="swiper-button-next btn-slide-next active"></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                                <div class="themesflat-pagination clearfix mt-2">
                                    <ul>
                                        <?php
                                    $query = "SELECT *FROM gallery LIMIT " . $page_first_result . ',' . $results_per_page;  
                $result = mysqli_query($con, $query);  
                  for($page = 1; $page<= $number_of_page; $page++) {  
                //  echo '<a href = "gallery.php?page=' . $page . '">' . $page . ' </a>'; 
                 echo '<li><a href="gallery.php?page=' . $page . '" class="page-numbers">' . $page . '</a></li>'; 
               }
               ?>
                    </ul>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
</div>  
            <?php include 'footer1.php' ?>  
            <?php include 'footer.php' ?>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/switchmode.js"></script>

</body>


<!-- Mirrored from surielementor.com/nuftihtml/popular-collections.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 05:30:32 GMT -->
</html>