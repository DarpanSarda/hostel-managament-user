<?php include 'controller.php' ?>
<?php include 'connection.php' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<style>
    table{

    }
</style>

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
    <link rel="apple-touch-icon-precomposed" href="assets/home/vgec1.jpg">

</head>
<body class="body header-fixed">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <?php 
        include 'navbar.php' ?> 
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
                                <h1 class="heading">Food Menu<span class="text-color-3">.</span></h1>
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>

            <?php
                    $qry="select * from menu";
                    $result=$con->query($qry);

                    while($row=$result->fetch_assoc())
                    {
                        $type=$row["type"];
                        $hostel=$row["hostel"];
                        $item1=$row["item1"];
                        $item2=$row["item2"];
                        $item3=$row["item3"];
                        $item4=$row["item4"];
                        $item5=$row["item5"];
                    }
                ?>

            <div class="tf-section flat-faq flat-create-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-faq">
                                <div class="flat-tabs tab-create-item flat-form flex-one">
                                    <ul class="menu-tab tab-title">
                                        <li class="item-title active">                                       
                                            <span class="inner fw-6 fs-18">Boys Hostel</span>
                                        </li>
                                        <li class="item-title">
                                            
                                            <span class="inner fw-6 fs-18">Girls Hostel</span>
                                        </li>
                                    </ul>
                                    <div class="content-tab">
                                        <div class="content-inner tab-content">
                                            <div class="flat-accordion fl-faq-content">                              
                                                <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Breakfast<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'breakfast'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Lunch<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'lunch'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Dinner<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'dinner'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                                                           
                                            </div>                                                     
                                        </div>                                       
                                        
                                        <div class="content-inner tab-content">
                                            <div class="flat-accordion fl-faq-content">                              
                                            <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Breakfast<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'breakfast'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Lunch<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'lunch'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                                <div class="flat-toggle">
                                                    <h3 class="toggle-title fw-4 text-t">Dinner<span class="btn-toggle"></span></h3>
                                                    <div class="toggle-content section-desc">
                                                        <?php 
                                                            $qry="select * from menu where type = 'dinner'";
                                                            $result=$con->query($qry);
                                        
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $item1=$row["item1"];
                                                                $item2=$row["item2"];
                                                                $item3=$row["item3"];
                                                                $item4=$row["item4"];
                                                                $item5=$row["item5"];
                                                            }
                                                        ?>
                                                        <p><?php echo $item1?></p>
                                                        <p><?php echo $item2?></p>
                                                        <p><?php echo $item3?></p>
                                                        <p><?php echo $item4?></p>
                                                        <p><?php echo $item5?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
           
<?php include 'footer1.php' ?>
        <?php include 'footer.php' ?>
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

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/switchmode.js"></script>

</body>

</html>