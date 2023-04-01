<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from surielementor.com/nuftihtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 05:30:17 GMT -->
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

<?php include 'navbar.php' ?>            <!-- title page -->
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
                                <h1 class="heading">Hostel Registration<span class="text-color-3">.</span></h1>
                            </div>                        
                        </div>
                    </div>
                </div>                    
            </section>
            <?php
            $email = $_SESSION['email'];
             $selreg="SELECT * FROM student WHERE email = '$email'";
             $resreg=mysqli_query($con,$selreg);
             $nreg=mysqli_num_rows($resreg);
             $row = mysqli_fetch_array($resreg);
            ?>
            <form action="register_ins.php" method="post">
            <div class="tf-section flat-explore flat-edit-profile flat-auctions-details ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4">
                            <div class="author-profile"> 
                                <div class="feature-profile center">
                                    <div class="wrap-img flex j-content">
                                        <div class="img-box relative">                                
                                            <img class="avatar" id="profileimg" src="assets/images/box-item/edit-profile.jpg" alt="">
                                            <img class="check absolute" src="assets/images/icon/icon-check.svg" alt="">                                      
                                        </div> 
                                    </div>
                                                               
                                    <div id="upload-profile">
                                        <a href="" class="btn-upload">
                                            Upload Your Photo </a>
                                            <input id="tf-upload-img" type="file" name="profile" required="">
                                        <!-- <a href="#" class="btn-upload btn-delete" id="tf-remove-img">
                                            Delete </a> -->
                                    </div>                     
                                </div>                   
                            </div> 
                        </div>  
                        <div class="col-xl-9 col-lg-8">
                            <div class="form-upload-profile post"> 
                                <!-- <h3 class="title-one fw-6">Choice Your Cover Image</h3>  -->
                                <div class="option-profile flex">                                 
                                    <!-- <form action="#">
                                        <label class="uploadFile">                                       
                                            <input type="file" class="inputfile form-control" id="upload-img2" name="file">
                                        </label>
                                    </form>  -->
                                    <div class=""> 
                                        <!-- <div class="media">
                                            <img class="avatar" id="editimg" src="assets/images/box-item/edit-profile-2.jpg" alt="">   
                                        </div>                                                                                                                                        -->
                                    </div>
                                </div> 
                                
                                <h3 class="title-two fw-6">Enter Information</h3> 
                                <div class="form-profile">                     
                                    <div class="form-infor-profile">
                                        <div class="form-infor flex flat-form">
                                            <div class="info-account">                              
                                                <fieldset>
                                                    <p class="title-infor-account">Name</p>
                                                    <input type="hidden" name="name" placeholder="Enter Your Name" value="<?php echo $row[1]?>">
                                                    <input type="text" placeholder="Enter Your Name" value="<?php echo $row[1]?>" readonly>
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Gmail</p>
                                                    <input type="hidden" name="email" placeholder="info@gmail.com" value="<?php echo $row[2]?>">
                                                    <input type="email" placeholder="info@gmail.com" value="<?php echo $row[2]?>" readonly>
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Caste</p>
                                                    <input type="text" name="caste" placeholder="e.g. Patel" required>                                              
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Sub-Caste</p>
                                                    <input type="text"  name="subcaste" placeholder="e.g. kadva-Patel" required>                                              
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">State</p>
                                                    <input type="text" name="state" placeholder="e.g. Gujarat" required>
                                                </fieldset>  
                                                <fieldset>
                                                    <p class="title-infor-account">Gender</p>
                                                    <input type="radio" id="male" name="gender" value="male">Male
                                                    <input type="radio" id="female" name="gender" value="female">Female                                             
                                                </fieldset>
                                                
                                                <fieldset>
                                                    <p class="title-infor-account">Addmission</p>
                                                    <input type="radio" id="regular" name="dept" value="ce">CE
                                                    <input type="radio" id="d2d" name="dept" value="It">IT
                                                    <input type="radio" id="regular" name="dept" value="ec">EC
                                                    <input type="radio" id="d2d" name="dept" value="dsa">DSA
                                                    <input type="radio" id="regular" name="dept" value="ic">IC
                                                    <input type="radio" id="d2d" name="dept" value="civil">Civil
                                                    <input type="radio" id="regular" name="dept" value="mech">Mech
                                                    <input type="radio" id="d2d" name="dept" value="chem">Chemical
                                                    <input type="radio" id="regular" name="dept" value="po">Power
                                                    <input type="radio" id="d2d" name="dept" value="e">Electrical
                                                </fieldset>                                                             
                                            </div>
                                            <div class="info-social">                                 
                                                <fieldset>
                                                    <p class="title-infor-account">Phone</p>
                                                    <input type="number" placeholder="+55 12333 444 55" name="phone" required>                                             
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Address</p>
                                                    <input type="text" name="address" placeholder="Your Address Create" required>
                                            
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Stpi / JEE</p>
                                                    <input type="text" name="marks" placeholder="Enter marks" required>
                                            
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">City</p>
                                                    <input type="text" name="city" placeholder="e.g. Jamnagar" required>
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Category</p>
                                                    <input type="radio" id="general" name="category" value="general">General
                                                    <input type="radio" id="obc" name="category" value="obc">obc
                                                    <input type="radio" id="sc" name="category" value="sc">SC
                                                    <input type="radio" id="st" name="category" value="st">st
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">Physical Disability</p>
                                                    <input type="radio" id="regular" name="yes" value="regular">Yes
                                                </fieldset>
                                                <fieldset>
                                                    <p class="title-infor-account">D2D / Regular</p>
                                                    <input type="radio" id="regular" name="edu" value="regular">Regular
                                                    <input type="radio" id="d2d" name="edu" value="d2d">D2D
                                                </fieldset>  
                                            </div>  
                                        </div>                                        
                                    </div>
                                
                                    <button class="tf-button-submit mg-t-15" type="submit">
                                        Register
                                    </button>           
                                    </div>  
                                </form>            
                            </div> 
                        </div>     
                    </div>           
                </div>
            </div>

<?php include 'footer1.php'?>
</div>
        <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>
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


<!-- Mirrored from surielementor.com/nuftihtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Mar 2023 05:30:18 GMT -->
</html>